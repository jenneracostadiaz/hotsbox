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
        Schema::create('product_groups', function (Blueprint $table) {
            $table->id();

            $table->text('name')->nullable();
            $table->string('slug', 128)->unique();
            $table->text('headline')->nullable();
            $table->text('tagline')->nullable();
            $table->text('orderfrmtpl')->nullable();
            $table->text('disabledgateways')->nullable();
            $table->tinyInteger('hidden')->nullable();
            $table->unsignedBigInteger('orders_id');
            $table->foreign('orders_id')->references('id')->on('orders')->onDelete('NO ACTION')->onUpdate('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_groups');
    }
};
