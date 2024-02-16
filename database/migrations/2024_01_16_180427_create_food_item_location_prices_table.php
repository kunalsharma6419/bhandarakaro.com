<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodItemLocationPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_item_location_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_item_id')->nullable();
            $table->unsignedBigInteger('pincode')->nullable();
            $table->decimal('location_price',10,2)->nullable();
            $table->foreign('food_item_id')->references('id')->on('food_products');
            $table->foreign('pincode')->references('id')->on('locations');
            $table->softDeletes();
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
        Schema::dropIfExists('food_item_location_prices');
    }
}
