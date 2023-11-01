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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            
            $table->enum('type', ['product', 'addon', 'configoptions', 'domainregister', 'domaintransfer', 'domainrenew', 'domainaddons', 'usage'])->nullable();
            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->decimal('msetupfee', 16, 2)->nullable();
            $table->decimal('qsetupfee', 16, 2)->nullable();
            $table->decimal('ssetupfee', 16, 2)->nullable();
            $table->decimal('asetupfee', 16, 2)->nullable();
            $table->decimal('bsetupfee', 16, 2)->nullable();
            $table->decimal('tsetupfee', 16, 2)->nullable();
            $table->decimal('monthly', 16, 2)->nullable();
            $table->decimal('quarterly', 16, 2)->nullable();
            $table->decimal('semiannually', 16, 2)->nullable();
            $table->decimal('annually', 16, 2)->nullable();
            $table->decimal('biennially', 16, 2)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
