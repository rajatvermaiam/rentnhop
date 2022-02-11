<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_logs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('coupon_id');
            $table->bigInteger('user_id');
            $table->bigInteger('booking_id');
            $table->enum('coupon_applied',['success','pending']);
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
        Schema::dropIfExists('coupon_logs');
    }
}
