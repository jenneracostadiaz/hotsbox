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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('ordernum')->nullable();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->date('date')->nullable();
            $table->text('nameservers')->nullable();
            $table->text('transfersecret')->nullable();
            $table->text('renewals')->nullable();
            $table->text('orderdata')->nullable();
            $table->decimal('amount', 16, 2)->nullable();
            $table->text('paymentmethod')->nullable();
            $table->unsignedBigInteger('invoices_id');
            $table->foreign('invoices_id')->references('id')->on('invoices')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->text('status')->nullable();
            $table->text('ipaddress')->nullable();
            $table->text('fraudmodule')->nullable();
            $table->text('fraudoutput')->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
