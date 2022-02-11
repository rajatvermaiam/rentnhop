<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('support_no')->nullable();
            $table->string('support_email')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('company_favicon')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pin_code')->nullable();
            $table->string('prefix_website')->nullable();

            $table->string('linkedin_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('whatsapp_no')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_robots')->nullable();
            $table->longText('meta_keyword')->nullable();
            $table->longText('meta_description')->nullable();

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
        Schema::dropIfExists('website_settings');
    }
}
