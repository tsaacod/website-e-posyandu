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
        Schema::create('perkembanganbayi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_bayi');
            $table->date('Bulan');
            $table->float('BeratBadan');
            $table->float('TinggiBadan');
            $table->timestamps();

            $table->foreign('id_bayi')->references('id')->on('bayi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembanganbayi');
    }
};