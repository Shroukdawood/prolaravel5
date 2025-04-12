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
        Schema::create('instractour', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum ('specialiy',['php','node','python'])->nullable();
            $table->string('address')->unique();
            $table->string('phone')->nullable();

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
