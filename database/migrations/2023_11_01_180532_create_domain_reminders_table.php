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
        Schema::create('domain_reminders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('domains_id');
            $table->foreign('domains_id')->references('id')->on('domains')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->date('date')->nullable();
            $table->text('recipients')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->tinyInteger('days_before_expiry')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_reminders');
    }
};
