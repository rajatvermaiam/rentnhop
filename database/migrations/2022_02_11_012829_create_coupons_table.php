<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('coupon_code')->unique();
            $table->date('coupon_expire_date');
            $table->enum('coupon_type',['fixed','percent']);
            $table->enum('status',['active','inactive']);
            $table->bigInteger('coupon_times_used');
            $table->bigInteger('amount');
            $table->bigInteger('minimum_booking_amount');
            $table->bigInteger('maximum_booking_amount');
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
        Schema::dropIfExists('coupons');
    }
}
