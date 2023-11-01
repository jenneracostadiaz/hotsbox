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
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            //accesshash, secure, port, active, disabled
            $table->string('name');
            $table->string('ipaddress');
            $table->string('assignedips');
            $table->string('hostname');
            $table->decimal('monthlycost', 16, 2);
            $table->string('noc');
            $table->string('statusaddress');
            $table->string('nameserver1');
            $table->string('nameserver1ip');
            $table->string('nameserver2');
            $table->string('nameserver2ip');
            $table->integer('maxaccounts');
            $table->string('type');
            $table->string('username');
            $table->string('password');
            $table->text('accesshash');
            $table->text('secure');
            $table->integer('port');
            $table->integer('active');
            $table->integer('disabled');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servers');
    }
};
