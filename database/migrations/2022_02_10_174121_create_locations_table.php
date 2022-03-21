<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('city_id');
            $table->string('name');
            $table->longText('map_url');
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
        Schema::dropIfExists('locations');
    }
}
