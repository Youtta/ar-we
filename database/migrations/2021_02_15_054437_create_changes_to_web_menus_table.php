<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangesToWebMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('web_menus', function (Blueprint $table) {
            $table->integer('language_id')->index()->default(1)->after('parent_id');
            $table->tinyInteger('is_child')->index()->after('is_content')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('web_menus', function (Blueprint $table) {
            //
        });
    }
}
