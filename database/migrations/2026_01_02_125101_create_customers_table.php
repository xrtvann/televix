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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('phone', 20)->unique();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();
            $table->integer('total_services')->default(0);
            $table->timestamp('last_service_at')->nullable();
            $table->timestamps();

            $table->index('phone');
            $table->index('email');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
