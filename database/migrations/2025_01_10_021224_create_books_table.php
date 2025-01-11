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
    {Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Tên sách
        $table->string('description'); // Mô tả
        $table->decimal('price', 10, 2); // Giá
        $table->integer('discount')->default(0); // Giảm giá (phần trăm)
        $table->integer('quantity')->default(1); // Số lượng
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
