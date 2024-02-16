<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temples_data', function (Blueprint $table) {
            $table->id();
            $table->longText('temple_location_link')->nullable();
            $table->string('temple_name')->nullable();
            $table->float('rating', 3, 1)->nullable();
            $table->integer('no_of_reviews')->nullable();
            $table->string('type')->nullable();
            $table->string('full_address_code')->nullable();
            $table->string('open_status')->nullable();
            $table->string('timings')->nullable();
            $table->longText('temple_image_url')->nullable();
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
        Schema::dropIfExists('temples_data');
    }
}
