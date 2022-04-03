<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->jsonb('cart_data');
            $table->jsonb('price_breakup');
            $table->string('from');
            $table->string('to');
            $table->string('mobile');
            $table->string('email')->nullable();
            $table->string('name')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('booking_status')->nullable();
            $table->bigInteger('user_id');
            $table->string('role');
            $table->bigInteger('paid_rent');
            $table->bigInteger('remaining_rent');
            $table->bigInteger('security_rent');
            $table->longText('razorpay_response')->nullable();
            $table->string('is_modified')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
