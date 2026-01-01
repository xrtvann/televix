<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $table = 'service_orders';

    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_phone',
        'customer_address',
        'device_type',
        'device_brand',
        'device_model',
        'problem_description',
        'technician_id',
        'status',
        'estimated_cost',
        'final_cost',
        'notes',
        'received_at',
        'completed_at',
        'paid_at',
        'payment_method',
        'payment_notes',
    ];

    protected $casts = [
        'estimated_cost' => 'decimal:2',
        'final_cost' => 'decimal:2',
        'received_at' => 'datetime',
        'completed_at' => 'datetime',
        'paid_at' => 'datetime',
    ];

    // Status constants
    const STATUS_NEW = 'baru';
    const STATUS_DIAGNOSIS = 'diagnosa';
    const STATUS_IN_PROGRESS = 'pengerjaan';
    const STATUS_WAITING_PARTS = 'menunggu';
    const STATUS_COMPLETED = 'selesai';
    const STATUS_CANCELLED = 'batal';

    public function technician(): BelongsTo
    {
        return $this->belongsTo(User::class, 'technician_id');
    }

    public function getStatusBadgeClassAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_NEW => 'bg-slate-100 text-slate-600 dark:bg-slate-700 dark:text-slate-300 border-slate-200 dark:border-slate-600',
            self::STATUS_DIAGNOSIS => 'bg-blue-50 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 border-blue-100 dark:border-blue-800',
            self::STATUS_IN_PROGRESS => 'bg-yellow-50 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300 border-yellow-100 dark:border-yellow-800',
            self::STATUS_WAITING_PARTS => 'bg-orange-50 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300 border-orange-100 dark:border-orange-800',
            self::STATUS_COMPLETED => 'bg-green-50 text-green-700 dark:bg-green-900/30 dark:text-green-300 border-green-100 dark:border-green-800',
            self::STATUS_CANCELLED => 'bg-red-50 text-red-700 dark:bg-red-900/30 dark:text-red-300 border-red-100 dark:border-red-800',
            default => 'bg-slate-100 text-slate-600'
        };
    }

    public function getStatusLabelAttribute(): string
    {
        return match ($this->status) {
            self::STATUS_NEW => 'Baru Masuk',
            self::STATUS_DIAGNOSIS => 'Diagnosa',
            self::STATUS_IN_PROGRESS => 'Sedang Dikerjakan',
            self::STATUS_WAITING_PARTS => 'Menunggu Sparepart',
            self::STATUS_COMPLETED => 'Selesai',
            self::STATUS_CANCELLED => 'Dibatalkan',
            default => ucfirst($this->status)
        };
    }

    public static function generateOrderNumber(): string
    {
        $prefix = 'TV';
        $year = now()->format('y');
        $month = now()->format('m');
        $pattern = "{$prefix}-{$year}{$month}-%";

        // Get the latest order number for current month using LIKE pattern
        $lastOrder = self::where('order_number', 'LIKE', $pattern)
            ->orderByRaw('CAST(SUBSTRING(order_number, -4) AS UNSIGNED) DESC')
            ->first();

        // Extract last number and increment
        if ($lastOrder && $lastOrder->order_number) {
            $lastNumber = (int) substr($lastOrder->order_number, -4);
            $number = $lastNumber + 1;
        } else {
            $number = 1;
        }

        // Generate order number
        $orderNumber = sprintf('%s-%s%s-%04d', $prefix, $year, $month, $number);

        // Double check uniqueness (in case of race condition)
        $attempts = 0;
        while (self::where('order_number', $orderNumber)->exists() && $attempts < 100) {
            $number++;
            $orderNumber = sprintf('%s-%s%s-%04d', $prefix, $year, $month, $number);
            $attempts++;
        }

        return $orderNumber;
    }

    public static function getStatuses(): array
    {
        return [
            self::STATUS_NEW => 'Baru Masuk',
            self::STATUS_DIAGNOSIS => 'Diagnosa',
            self::STATUS_IN_PROGRESS => 'Sedang Dikerjakan',
            self::STATUS_WAITING_PARTS => 'Menunggu Sparepart',
            self::STATUS_COMPLETED => 'Selesai',
            self::STATUS_CANCELLED => 'Dibatalkan',
        ];
    }
}
