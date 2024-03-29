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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('market_id');
            $table->string('token');
            $table->string('date');
            $table->string('total_price');
            $table->string('status');
            $table->string('status_payment');
            $table->string('address');
            $table->string('method_payment');
            $table->string('proof_payment');
            $table->string('user_message');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('market_id')->references('id')->on('markets');
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
