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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();

            $table->string('code', 3);
            $table->string('prefix', 16)->nullable();
            $table->string('suffix', 16)->nullable();
            $table->string('format', 16)->nullable();
            $table->decimal('rate', 16, 8)->default(1);
            $table->integer('default')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
