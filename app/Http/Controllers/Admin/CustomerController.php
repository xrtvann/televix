<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Customer::query();

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        // Filter by service status
        if ($request->filled('status')) {
            switch ($request->status) {
                case 'aktif':
                    $query->whereHas('activeServices');
                    break;
                case 'selesai':
                    $query->where('total_services', '>', 0);
                    break;
                case 'baru':
                    $query->where('total_services', 0);
                    break;
            }
        }

        // Sorting
        $sortBy = $request->get('sort', 'nama_asc');
        switch ($sortBy) {
            case 'nama_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'terbaru':
                $query->latest();
                break;
            case 'servis_terbanyak':
                $query->orderBy('total_services', 'desc');
                break;
            default:
                $query->orderBy('name', 'asc');
        }

        $customers = $query->withCount('serviceOrders')->paginate(15);
        $totalCustomers = Customer::count();

        return view('pages.admin.manajemen-pelanggan', compact('customers', 'totalCustomers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'phone' => 'required|string|max:20|unique:customers,phone',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'notes' => 'nullable|string',
        ], [
            'name.required' => 'Nama pelanggan wajib diisi',
            'phone.required' => 'Nomor telepon wajib diisi',
            'phone.unique' => 'Nomor telepon sudah terdaftar',
            'email.email' => 'Format email tidak valid',
        ]);

        try {
            $customer = Customer::create($validated);

            ActivityLog::log('customer_created', $customer, [
                'created_by' => Auth::user()->name,
                'customer_name' => $customer->name
            ]);

            return redirect()->route('manajemen-pelanggan.index')
                ->with('success', "Pelanggan {$customer->name} berhasil ditambahkan!");
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal menambahkan pelanggan. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        $customer->load([
            'serviceOrders' => function ($query) {
                $query->latest('received_at');
            }
        ]);

        return view('pages.admin.customer-detail', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'phone' => 'required|string|max:20|unique:customers,phone,' . $customer->id,
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $customer->update($validated);

        ActivityLog::log('customer_updated', $customer, [
            'updated_by' => Auth::user()->name,
            'customer_name' => $customer->name
        ]);

        return redirect()->route('manajemen-pelanggan.index')
            ->with('success', "Data pelanggan {$customer->name} berhasil diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customerName = $customer->name;

        // Check if customer has active services
        if ($customer->activeServices()->count() > 0) {
            return redirect()->back()
                ->with('error', 'Tidak dapat menghapus pelanggan yang masih memiliki servis aktif!');
        }

        ActivityLog::log('customer_deleted', $customer, [
            'deleted_by' => Auth::user()->name,
            'customer_name' => $customerName
        ]);

        $customer->delete();

        return redirect()->route('manajemen-pelanggan.index')
            ->with('success', "Pelanggan {$customerName} berhasil dihapus!");
    }

    /**
     * Export customers to CSV
     */
    public function export()
    {
        $customers = Customer::withCount('serviceOrders')->get();

        $filename = 'customers-' . now()->format('Y-m-d') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function () use ($customers) {
            $file = fopen('php://output', 'w');

            // Add BOM for UTF-8
            fprintf($file, chr(0xEF) . chr(0xBB) . chr(0xBF));

            // Headers
            fputcsv($file, ['Nama', 'Telepon', 'Email', 'Alamat', 'Total Servis', 'Terakhir Servis', 'Terdaftar']);

            foreach ($customers as $customer) {
                fputcsv($file, [
                    $customer->name,
                    $customer->phone,
                    $customer->email ?? '-',
                    $customer->address ?? '-',
                    $customer->service_orders_count,
                    $customer->last_service_at ? $customer->last_service_at->format('d/m/Y H:i') : '-',
                    $customer->created_at->format('d/m/Y'),
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}

