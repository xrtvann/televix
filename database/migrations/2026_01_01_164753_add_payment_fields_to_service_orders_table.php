<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('service_orders', function (Blueprint $table) {
            $table->timestamp('paid_at')->nullable()->after('completed_at');
            $table->enum('payment_method', ['cash', 'transfer', 'qris', 'debit'])->nullable()->after('paid_at');
            $table->text('payment_notes')->nullable()->after('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('service_orders', function (Blueprint $table) {
            $table->dropColumn(['paid_at', 'payment_method', 'payment_notes']);
        });
    }
};
