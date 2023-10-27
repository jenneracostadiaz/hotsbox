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
        Schema::create('api_logs', function (Blueprint $table) {
            $table->id();

            $table->string('action', 64);
            $table->string('endpoint', 64);
            $table->enum('method', ['GET', 'POST', 'PUT', 'PATCH', 'DELETE']);
            $table->text('request');
            $table->text('request_headers');
            $table->text('response');
            $table->integer('response_status');
            $table->text('response_headers');
            $table->integer('level')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_logs');
    }
};
