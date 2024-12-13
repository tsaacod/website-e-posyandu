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
    Schema::table('bayi', function (Blueprint $table) {
        $table->dropColumn('bulan');
    });
}

public function down(): void
{
    Schema::table('bayi', function (Blueprint $table) {
        $table->date('bulan');
    });
}

};
