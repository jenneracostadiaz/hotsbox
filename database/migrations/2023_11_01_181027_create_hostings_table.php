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
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('orders_id');
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('servers_id');
            $table->date('regdate')->nullable();
            $table->unsignedBigInteger('domain_id')->nullable();
            $table->text('paymentmethod')->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('firstpaymentamount', 16, 2)->nullable();
            $table->decimal('amount', 16, 2)->nullable();
            $table->text('billingcycle')->nullable();
            $table->date('nextduedate')->nullable();
            $table->date('nextinvoicedate')->nullable();
            $table->date('termination_date')->nullable();
            $table->date('completed_date')->nullable();
            $table->enum('domainstatus', ['Pending', 'Active', 'Suspended', 'Terminated', 'Cancelled', 'Fraud', 'Completed'])->nullable();
            $table->text('username')->nullable();
            $table->text('password')->nullable();
            $table->text('notes')->nullable();
            $table->integer('diskusage')->nullable();
            $table->integer('disklimit')->nullable();
            $table->integer('bwusage')->nullable();
            $table->integer('bwlimit')->nullable();
            $table->dateTime('lastupdate')->nullable();
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('NO ACTION');
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('NO ACTION');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('CASCADE');
            $table->foreign('servers_id')->references('id')->on('servers')->onDelete('NO ACTION');
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostings');
    }
};
