<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mf_features', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id')->default(1)->index();
            $table->integer('parent_id')->default(0)->index();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->integer('sort')->default(1)->index();
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
        Schema::dropIfExists('mf_features');
    }
}
