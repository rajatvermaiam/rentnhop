<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->longText('images');
            $table->longText('description');
            $table->longText('terms_conditions');
            $table->bigInteger('user_id');
            $table->string('meta_robots');
            $table->string('meta_title');
            $table->longText('meta_keyword');
            $table->longText('meta_description');
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
        Schema::dropIfExists('vehicle');
    }
}
