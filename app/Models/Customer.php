<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'notes',
        'total_services',
        'last_service_at',
    ];

    protected $casts = [
        'last_service_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get all service orders for this customer
     */
    public function serviceOrders(): HasMany
    {
        return $this->hasMany(ServiceOrder::class, 'customer_phone', 'phone');
    }

    /**
     * Get active service orders
     */
    public function activeServices(): HasMany
    {
        return $this->serviceOrders()
            ->whereNotIn('status', [ServiceOrder::STATUS_COMPLETED, ServiceOrder::STATUS_CANCELLED]);
    }

    /**
     * Update total services count
     */
    public function updateServiceStats(): void
    {
        $this->update([
            'total_services' => $this->serviceOrders()->count(),
            'last_service_at' => $this->serviceOrders()->latest('received_at')->first()?->received_at,
        ]);
    }
}
