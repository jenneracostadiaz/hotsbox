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
        Schema::create('server_servergroup', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('server_id');
            $table->foreign('server_id')->references('id')->on('servers');

            $table->unsignedBigInteger('server_group_id');
            $table->foreign('server_group_id')->references('id')->on('server_groups');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_servergroup');
    }
};
