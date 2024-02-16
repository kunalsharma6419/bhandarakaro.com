<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationPincodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_pincodes', function (Blueprint $table) {
            $table->id();
            $table->string('circle_name');
            $table->string('region_name');
            $table->string('division_name');
            // Foreign key relationship with locations table
            // $table->foreign('division_name')->references('city')->on('locations')->onDelete('cascade'); // Make division_name a primary key
            $table->string('office_name');
            $table->bigInteger('pincode');
            $table->string('office_type');
            $table->enum('delivery', ['Delivery', 'Non Delivery']);
            $table->string('district');
            $table->string('state_name');



            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_pincodes');
    }
}
