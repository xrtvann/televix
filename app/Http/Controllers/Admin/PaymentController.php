<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceOrder;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = ServiceOrder::with('technician')
            ->where('status', ServiceOrder::STATUS_COMPLETED);

        // Filter berdasarkan status pembayaran
        if ($request->has('payment_status')) {
            if ($request->payment_status === 'paid') {
                $query->whereNotNull('paid_at');
            } elseif ($request->payment_status === 'unpaid') {
                $query->whereNull('paid_at');
            }
        } else {
            // Default: hanya yang belum dibayar
            $query->whereNull('paid_at');
        }

        // Search
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('order_number', 'like', "%{$search}%")
                    ->orWhere('customer_name', 'like', "%{$search}%")
                    ->orWhere('customer_phone', 'like', "%{$search}%");
            });
        }

        $orders = $query->orderBy('completed_at', 'desc')->paginate(15);

        $totalUnpaid = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereNull('paid_at')
            ->count();

        $totalUnpaidAmount = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereNull('paid_at')
            ->sum('final_cost');

        return view('pages.admin.pembayaran', compact('orders', 'totalUnpaid', 'totalUnpaidAmount'));
    }

    public function pay(Request $request, ServiceOrder $order)
    {
        $request->validate([
            'payment_method' => 'required|in:cash,transfer,qris,debit',
            'payment_notes' => 'nullable|string|max:500',
        ]);

        DB::beginTransaction();
        try {
            $order->update([
                'paid_at' => now(),
                'payment_method' => $request->payment_method,
                'payment_notes' => $request->payment_notes,
            ]);

            // Log activity
            ActivityLog::create([
                'user_id' => auth()->id(),
                'action' => 'payment_completed',
                'description' => "Pembayaran order {$order->order_number} berhasil dicatat. Metode: {$request->payment_method}",
                'model_type' => ServiceOrder::class,
                'model_id' => $order->id,
            ]);

            DB::commit();

            return redirect()->route('pembayaran.index')
                ->with('success', 'Pembayaran berhasil dicatat!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->with('error', 'Gagal mencatat pembayaran: ' . $e->getMessage());
        }
    }
}
