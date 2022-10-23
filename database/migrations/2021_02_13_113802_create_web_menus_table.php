<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(0)->index();
            $table->string('icon')->nullable();
            $table->string('name');
            $table->string('route')->nullable();
            $table->tinyInteger('is_seo')->default(0)->index();
            $table->tinyInteger('is_content')->default(0)->index();
            $table->string('content_route')->nullable();
            $table->text('seo_tags')->nullable();
            $table->text('seo_description')->nullable();
            $table->integer('sort')->default(0)->index();
            $table->tinyInteger('status')->default(1)->index();
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
        Schema::dropIfExists('web_menus');
    }
}
