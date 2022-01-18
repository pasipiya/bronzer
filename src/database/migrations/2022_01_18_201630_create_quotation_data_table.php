<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotation_data', function (Blueprint $table) {
            $table->id();
            $table->string('quotation_id')->nullable();
            $table->string('type')->nullable();
            $table->string('travel_type_id')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('flight_type')->nullable();
            $table->string('trip_type')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('depart')->nullable();
            $table->string('return')->nullable();
            $table->string('city')->nullable();
            $table->string('pickup')->nullable();
            $table->string('transfer_type')->nullable();
            $table->string('dropoff')->nullable();
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
        Schema::dropIfExists('quotation_data');
    }
}
