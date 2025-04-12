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
        Schema::create('Productes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('Price')->nullable();
            $table->string('Category')->nullable();
            $table->string('Detailes')->nullable();

            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
