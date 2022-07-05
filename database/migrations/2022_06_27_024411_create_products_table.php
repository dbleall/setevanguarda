<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_category')->nullable();
            $table->string('product_name');
            $table->string('product_image1')->nullable();
            $table->string('product_image2')->nullable();
            $table->string('product_image3')->nullable();
            $table->string('product_image4')->nullable();
            $table->string('product_image5')->nullable();
            $table->string('product_code')->nullable();
            $table->string('product_price')->nullable();
            $table->string('product_condition_payment')->nullable();
            $table->longtext('product_description')->nullable();
            $table->longtext('product_description2')->nullable();
            $table->string('product_suplier')->nullable();
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
        Schema::dropIfExists('products');
    }
};
