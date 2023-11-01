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
        Schema::create('cancel_requests', function (Blueprint $table) {
            $table->id();

            $table->dateTime('date')->nullable();
            $table->integer('relid')->nullable();
            $table->text('reason')->nullable();
            $table->text('type')->nullable();
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('CASCADE')->onUpdate('CASCADE');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cancel_requests');
    }
};
