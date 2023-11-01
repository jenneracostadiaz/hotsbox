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
        Schema::create('domain_pricings', function (Blueprint $table) {
            $table->id();
            $table->text('extension');
            $table->tinyInteger('dnsmanagement')->nullable();
            $table->tinyInteger('emailforwarding')->nullable();
            $table->tinyInteger('idprotection')->nullable();
            $table->tinyInteger('eppcode')->nullable();
            $table->text('autoreg')->nullable();
            $table->integer('order');
            $table->string('group', 45)->nullable();
            $table->integer('grace_period')->nullable();
            $table->decimal('grace_period_fee', 16, 2)->nullable();
            $table->tinyInteger('redemption_grace_period')->nullable();
            $table->decimal('redemption_grace_period_fee', 16, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_pricings');
    }
};
