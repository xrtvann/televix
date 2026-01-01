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
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number', 50)->unique();
            $table->string('customer_name', 150);
            $table->string('customer_phone', 20);
            $table->text('customer_address')->nullable();
            $table->string('device_type', 100);
            $table->string('device_brand', 100);
            $table->string('device_model', 100)->nullable();
            $table->text('problem_description');
            $table->foreignId('technician_id')->nullable()->constrained('users')->onDelete('set null');
            $table->enum('status', ['baru', 'diagnosa', 'pengerjaan', 'menunggu', 'selesai', 'batal'])->default('baru');
            $table->decimal('estimated_cost', 10, 2)->nullable();
            $table->decimal('final_cost', 10, 2)->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('received_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->index('order_number');
            $table->index('customer_phone');
            $table->index('status');
            $table->index('technician_id');
            $table->index('received_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
