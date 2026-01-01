<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceOrder;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();

        // Statistik Service Orders
        $newOrders = ServiceOrder::where('status', ServiceOrder::STATUS_NEW)->count();
        $newOrdersYesterday = ServiceOrder::where('status', ServiceOrder::STATUS_NEW)
            ->whereDate('created_at', $yesterday)
            ->count();

        $ongoingOrders = ServiceOrder::whereIn('status', [
            ServiceOrder::STATUS_DIAGNOSIS,
            ServiceOrder::STATUS_IN_PROGRESS,
        ])->count();

        $completedToday = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereDate('completed_at', $today)
            ->count();
        $completedYesterday = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereDate('completed_at', $yesterday)
            ->count();

        // Pendapatan hari ini (dari order yang selesai)
        $todayRevenue = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereDate('completed_at', $today)
            ->sum('final_cost');
        $yesterdayRevenue = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereDate('completed_at', $yesterday)
            ->sum('final_cost');

        // Hitung persentase perubahan
        $newOrdersChange = $newOrdersYesterday > 0
            ? round((($newOrders - $newOrdersYesterday) / $newOrdersYesterday) * 100)
            : ($newOrders > 0 ? 100 : 0);

        $completedChange = $completedYesterday > 0
            ? round((($completedToday - $completedYesterday) / $completedYesterday) * 100)
            : ($completedToday > 0 ? 100 : 0);

        $revenueChange = $yesterdayRevenue > 0
            ? round((($todayRevenue - $yesterdayRevenue) / $yesterdayRevenue) * 100)
            : ($todayRevenue > 0 ? 100 : 0);

        // Statistik Mingguan (7 hari terakhir)
        $weekStart = Carbon::today()->subDays(6);
        $previousWeekStart = Carbon::today()->subDays(13);
        $previousWeekEnd = Carbon::today()->subDays(7);

        $newOrdersWeek = ServiceOrder::where('status', ServiceOrder::STATUS_NEW)
            ->whereBetween('created_at', [$weekStart, $today->copy()->endOfDay()])
            ->count();
        $newOrdersPreviousWeek = ServiceOrder::where('status', ServiceOrder::STATUS_NEW)
            ->whereBetween('created_at', [$previousWeekStart, $previousWeekEnd])
            ->count();

        $completedWeek = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereBetween('completed_at', [$weekStart, $today->copy()->endOfDay()])
            ->count();
        $completedPreviousWeek = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereBetween('completed_at', [$previousWeekStart, $previousWeekEnd])
            ->count();

        $revenueWeek = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereBetween('completed_at', [$weekStart, $today->copy()->endOfDay()])
            ->sum('final_cost');
        $revenuePreviousWeek = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
            ->whereBetween('completed_at', [$previousWeekStart, $previousWeekEnd])
            ->sum('final_cost');

        // Hitung persentase perubahan mingguan
        $newOrdersWeekChange = $newOrdersPreviousWeek > 0
            ? round((($newOrdersWeek - $newOrdersPreviousWeek) / $newOrdersPreviousWeek) * 100)
            : ($newOrdersWeek > 0 ? 100 : 0);

        $completedWeekChange = $completedPreviousWeek > 0
            ? round((($completedWeek - $completedPreviousWeek) / $completedPreviousWeek) * 100)
            : ($completedWeek > 0 ? 100 : 0);

        $revenueWeekChange = $revenuePreviousWeek > 0
            ? round((($revenueWeek - $revenuePreviousWeek) / $revenuePreviousWeek) * 100)
            : ($revenueWeek > 0 ? 100 : 0);

        // Antrean aktif (order yang belum selesai/batal)
        $activeQueue = ServiceOrder::with('technician')
            ->whereNotIn('status', [ServiceOrder::STATUS_COMPLETED, ServiceOrder::STATUS_CANCELLED])
            ->orderBy('received_at', 'desc')
            ->limit(5)
            ->get();

        // Pendapatan mingguan (7 hari terakhir)
        $weeklyRevenue = [];
        $maxRevenue = 0;
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $revenue = ServiceOrder::where('status', ServiceOrder::STATUS_COMPLETED)
                ->whereDate('completed_at', $date)
                ->sum('final_cost');
            $weeklyRevenue[] = [
                'day' => $date->locale('id')->isoFormat('ddd'),
                'date' => $date,
                'revenue' => $revenue,
                'is_today' => $date->isToday(),
            ];
            if ($revenue > $maxRevenue) {
                $maxRevenue = $revenue;
            }
        }

        // Status teknisi (user dengan role teknisi)
        $technicians = User::whereHas('roles', function ($query) {
            $query->where('name', 'teknisi');
        })->get()->map(function ($tech) {
            $activeOrders = ServiceOrder::where('technician_id', $tech->id)
                ->whereNotIn('status', [ServiceOrder::STATUS_COMPLETED, ServiceOrder::STATUS_CANCELLED])
                ->count();

            return [
                'id' => $tech->id,
                'name' => $tech->name,
                'email' => $tech->email,
                'active_orders' => $activeOrders,
                'status' => $activeOrders > 0 ? 'Aktif' : 'Offline',
                'status_color' => $activeOrders > 0 ? 'green' : 'slate',
            ];
        });

        return view('pages.admin.dashboard', compact(
            'newOrders',
            'newOrdersChange',
            'ongoingOrders',
            'completedToday',
            'completedChange',
            'todayRevenue',
            'revenueChange',
            'newOrdersWeek',
            'newOrdersWeekChange',
            'completedWeek',
            'completedWeekChange',
            'revenueWeek',
            'revenueWeekChange',
            'activeQueue',
            'weeklyRevenue',
            'maxRevenue',
            'technicians'
        ));
    }
}
