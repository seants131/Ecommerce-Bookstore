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
        Schema::table('baiviet', function (Blueprint $table) {
            $table->string('chude')->nullable(); // Thêm trường chủ đề
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('baiviet', function (Blueprint $table) {
            //
        });
    }
};
