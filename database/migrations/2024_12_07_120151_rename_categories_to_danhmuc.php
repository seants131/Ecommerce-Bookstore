<?php

// database/migrations/xxxx_xx_xx_xxxxxx_rename_categories_to_danhmuc.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameCategoriesToDanhmuc extends Migration
{
    public function up()
    {
        Schema::rename('categories', 'danhmuc');
    }

    public function down()
    {
        Schema::rename('danhmuc', 'categories');
    }
}
