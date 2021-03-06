<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('category')->nullable();
            $table->string('top_speed')->nullable();
            $table->string('fuel_capacity')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->longText('images');
            $table->longText('inclusions')->nullable();
            $table->longText('description');
            $table->longText('terms_conditions');
            $table->bigInteger('user_id');
            $table->bigInteger('gears')->nullable();;
            $table->bigInteger('engine_cc');
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
