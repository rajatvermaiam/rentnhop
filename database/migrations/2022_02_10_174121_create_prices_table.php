<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('city_id');
            $table->string('city_name')->nullable();
            $table->bigInteger('locality_id');
            $table->string('locality_name')->nullable();
            $table->bigInteger('vehicle_id')->nullable();;
            $table->string('status')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('weekday_price');
            $table->bigInteger('weekend_price');
            $table->bigInteger('security_price');
            $table->bigInteger('monthly_price');
            $table->bigInteger('minimum_price')->nullable();
            $table->bigInteger('quantity');
            $table->boolean('is_monthly');
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
        Schema::dropIfExists('prices');
    }
}
