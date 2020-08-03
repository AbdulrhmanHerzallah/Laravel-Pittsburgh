<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_content', function (Blueprint $table) {
            $table->id();
            $table->longText('about_us');
            $table->longText('coffee_message');
            $table->longText('target_coffee');
            $table->string('video_title');
            $table->string('video_url');
            $table->string('img_parallax');
            $table->bigInteger('meeting_count')->nullable();
            $table->bigInteger('subscribed')->nullable();
            $table->timestamps();
        });

        Schema::create('landing_page_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('desc')->nullable();
            $table->string('img_url');
            $table->timestamps();
        });

        Schema::create('landing_page_links', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->timestamps();
        });

        Schema::create('landing_page_volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img_url');
            $table->text('desc');
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
        Schema::dropIfExists('landingPages');
    }
}
