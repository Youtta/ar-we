<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeProductsColumsDatatype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mf_products', function (Blueprint $table) {
            $table->dropColumn("image");
            $table->text("feature_product_image")->change();
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
            $table->string("image")->after("category_id");
            $table->string("feature_product_image")->change();
        });
    }
}
