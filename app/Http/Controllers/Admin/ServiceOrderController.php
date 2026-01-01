<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\ServiceOrder;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = ServiceOrder::with('technician');

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('order_number', 'like', "%{$search}%")
                    ->orWhere('customer_name', 'like', "%{$search}%")
                    ->orWhere('customer_phone', 'like', "%{$search}%");
            });
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Filter by technician
        if ($request->filled('technician_id')) {
            $query->where('technician_id', $request->technician_id);
        }

        // Filter by date
        if ($request->filled('date')) {
            $query->whereDate('received_at', $request->date);
        }

        $orders = $query->latest('received_at')->paginate(15);
        $technicians = User::whereHas('roles', function ($q) {
            $q->where('name', 'teknisi');
        })->get();

        // Statistics
        $totalOrders = ServiceOrder::count();
        $newOrders = ServiceOrder::where('status', ServiceOrder::STATUS_NEW)->count();
        $inProgress = ServiceOrder::where('status', ServiceOrder::STATUS_IN_PROGRESS)->count();
        $completed = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)->count();

        return view('pages.admin.manajemen-servis', compact(
            'orders',
            'technicians',
            'totalOrders',
            'newOrders',
            'inProgress',
            'completed'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:150',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'nullable|string',
            'device_type' => 'required|string|max:100',
            'device_brand' => 'required|string|max:100',
            'device_model' => 'nullable|string|max:100',
            'problem_description' => 'required|string',
            'technician_id' => 'nullable|exists:users,id',
            'estimated_cost' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string',
        ], [
            'customer_name.required' => 'Nama pelanggan wajib diisi',
            'customer_phone.required' => 'Nomor telepon wajib diisi',
            'device_type.required' => 'Jenis perangkat wajib diisi',
            'device_brand.required' => 'Merek perangkat wajib diisi',
            'problem_description.required' => 'Deskripsi kerusakan wajib diisi',
        ]);

        try {
            $order = DB::transaction(function () use ($validated) {
                $validated['order_number'] = ServiceOrder::generateOrderNumber();
                $validated['received_at'] = now();
                $validated['status'] = ServiceOrder::STATUS_NEW;

                $order = ServiceOrder::create($validated);

                ActivityLog::log('order_created', $order, [
                    'created_by' => Auth::user()->name,
                    'order_number' => $order->order_number
                ]);

                return $order;
            });

            return redirect()->route('manajemen-servis.index')
                ->with('success', "Order {$order->order_number} berhasil dibuat!");
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal membuat order. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ServiceOrder $order)
    {
        $order->load('technician');

        // Get all technicians for assignment
        $technicians = User::whereHas('roles', function ($query) {
            $query->where('name', 'teknisi');
        })->get();

        return view('pages.admin.service-detail', compact('order', 'technicians'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ServiceOrder $order)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:150',
            'customer_phone' => 'required|string|max:20',
            'customer_address' => 'nullable|string',
            'device_type' => 'required|string|max:100',
            'device_brand' => 'required|string|max:100',
            'device_model' => 'nullable|string|max:100',
            'problem_description' => 'required|string',
            'technician_id' => 'nullable|exists:users,id',
            'status' => 'required|in:baru,diagnosa,pengerjaan,menunggu,selesai,batal',
            'estimated_cost' => 'nullable|numeric|min:0',
            'final_cost' => 'nullable|numeric|min:0',
            'notes' => 'nullable|string',
        ]);

        // If status changed to completed, set completed_at
        if ($validated['status'] === ServiceOrder::STATUS_COMPLETED && $order->status !== ServiceOrder::STATUS_COMPLETED) {
            $validated['completed_at'] = now();
        }

        $order->update($validated);

        ActivityLog::log('order_updated', $order, [
            'updated_by' => Auth::user()->name,
            'order_number' => $order->order_number
        ]);

        return redirect()->route('manajemen-servis.index')
            ->with('success', "Order {$order->order_number} berhasil diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceOrder $order)
    {
        $orderNumber = $order->order_number;

        ActivityLog::log('order_deleted', $order, [
            'deleted_by' => Auth::user()->name,
            'order_number' => $orderNumber
        ]);

        $order->delete();

        return redirect()->route('manajemen-servis.index')
            ->with('success', "Order {$orderNumber} berhasil dihapus!");
    }

    /**
     * Assign technician to order
     */
    public function assignTechnician(Request $request, ServiceOrder $order)
    {
        $validated = $request->validate([
            'technician_id' => 'required|exists:users,id',
        ]);

        $order->update([
            'technician_id' => $validated['technician_id'],
            'status' => ServiceOrder::STATUS_DIAGNOSIS,
        ]);

        ActivityLog::log('technician_assigned', $order, [
            'assigned_by' => Auth::user()->name,
            'technician_id' => $validated['technician_id']
        ]);

        return redirect()->back()
            ->with('success', 'Teknisi berhasil ditugaskan!');
    }

    /**
     * Update order status
     */
    public function updateStatus(Request $request, ServiceOrder $order)
    {
        $validated = $request->validate([
            'status' => 'required|in:baru,diagnosa,pengerjaan,menunggu,selesai,batal',
        ]);

        $oldStatus = $order->status;
        $order->update($validated);

        if ($validated['status'] === ServiceOrder::STATUS_COMPLETED && $oldStatus !== ServiceOrder::STATUS_COMPLETED) {
            $order->update(['completed_at' => now()]);
        }

        ActivityLog::log('order_status_updated', $order, [
            'updated_by' => Auth::user()->name,
            'old_status' => $oldStatus,
            'new_status' => $validated['status']
        ]);

        return redirect()->back()
            ->with('success', 'Status order berhasil diupdate!');
    }
}
