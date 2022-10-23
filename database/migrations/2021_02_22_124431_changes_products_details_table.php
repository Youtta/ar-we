<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangesProductsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mf_products', function (Blueprint $table) {
            $table->integer('size_id')->index()->after('category_id');
            $table->integer('dimension_id')->index()->after('size_id');
            $table->string('feature_product_image')->after('image');
            $table->string('product_tag')->after('name')->nullable();
            $table->text('section_images')->after('feature_product_image');
            $table->text('feature_images')->after('section_images')->nullable();
            $table->string('slug')->after('description')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mf_products', function (Blueprint $table) {
            //
        });
    }
}
