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
       Schema::create('lien_he',function(Blueprint $table)
       {
        $table->id();
        $table->string('ho_ten');
        $table->string('email');
        $table->string('chu_de');
        $table->text('noi_dung');
        $table->timestamps();
       }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lien_he');
    }
};
