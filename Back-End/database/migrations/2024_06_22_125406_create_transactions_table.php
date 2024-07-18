<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->string('reff_id');
            $table->string('product_name');
            $table->string('id_game');
            $table->unsignedInteger('price');
            $table->string('whatsapp');
            $table->enum('payment', ['Paid', 'Unpaid', 'Expired'])->default('Unpaid');
            $table->enum('status', ['Success', 'Pending', 'Progress', 'Failed'])->default('Pending');
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
