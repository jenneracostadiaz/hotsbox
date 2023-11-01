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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->text('type')->nullable();
            $table->integer('gid')->nullable();
            $table->text('name')->nullable();
            $table->string('slug', 128)->unique();
            $table->text('description')->nullable();
            $table->tinyInteger('hidden')->nullable();
            $table->tinyInteger('stockcontrol')->nullable();
            $table->integer('qty')->nullable();
            $table->unsignedBigInteger('server_groups_id');
            $table->foreign('server_groups_id')->references('id')->on('server_groups')->onDelete('CASCADE');
            $table->text('short_description')->nullable();
            $table->text('tagline')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
