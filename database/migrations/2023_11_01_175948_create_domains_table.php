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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->integer('order')->nullable();
            $table->enum('type', ['Register', 'Transfer'])->nullable();
            $table->date('registrationdate')->nullable();
            $table->text('domain');
            $table->decimal('firstpaymentamount', 16, 2)->nullable();
            $table->decimal('recurringamount', 16, 2)->nullable();
            $table->text('registrar')->nullable();
            $table->integer('registrationperiod')->nullable();
            $table->date('expirydate')->nullable();
            $table->enum('status', ['Pending','Pending Registration','Pending Transfer','Active','Grace','Redemption','Expired','Cancelled','Fraud','Transferred Away'])->nullable();
            $table->date('nextduedate')->nullable();
            $table->date('nextinvoicedate')->nullable();
            $table->text('additionalnotes')->nullable();
            $table->text('paymentmethod')->nullable();
            $table->tinyInteger('dnsmanagement')->nullable();
            $table->tinyInteger('emailforwarding')->nullable();
            $table->tinyInteger('idprotection')->nullable();
            $table->tinyInteger('is_premium')->nullable();
            $table->tinyInteger('donotrenew')->nullable();
            $table->text('reminders')->nullable();
            $table->tinyInteger('synced')->nullable();
            $table->unsignedBigInteger('orders_id');
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
