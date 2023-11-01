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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            //status, paymentmethod, paymethodid, notes, created_at, updated_at
            $table->unsignedBigInteger('users_id');
            $table->string('invoicenum');
            $table->date('date');
            $table->date('duedate');
            $table->date('datepaid');
            $table->date('date_refunded');
            $table->date('date_cancelled');
            $table->decimal('subtotal');
            $table->decimal('credit');
            $table->decimal('tax');
            $table->decimal('tax2');
            $table->decimal('total');
            $table->decimal('taxrate');
            $table->decimal('taxrate2');
            $table->enum('status', ['Unpaid', 'Paid', 'Cancelled', 'Refunded']);
            $table->enum('paymentmethod', ['paypal', 'banktransfer']);
            $table->unsignedBigInteger('currency_id');
            $table->string('notes');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('NO ACTION');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
