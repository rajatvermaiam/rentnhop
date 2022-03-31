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
            $table->bigInteger('locality_id');
            $table->string('status')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('weekday_price');
            $table->bigInteger('weekend_price');
            $table->bigInteger('security_price');
            $table->bigInteger('quantity');
            $table->bigInteger('monthly_price');
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
