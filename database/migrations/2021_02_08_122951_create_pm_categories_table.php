<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePmCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pm_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id')->default(1)->index();
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->string('slug')->index();
            $table->integer('status')->index()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pm_categories');
    }
}
