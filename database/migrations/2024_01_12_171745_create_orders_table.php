<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('food_id')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->string('quantity')->nullable();
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled']);
            $table->text('shipping_address');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('food_id')->references('id')->on('food_products');
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
        Schema::dropIfExists('orders');
    }
}
