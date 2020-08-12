<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_contact_info', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });


        Schema::create('footer_links', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->timestamps();
        });


        Schema::create('footer_social_links', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type')->unique();
            $table->string('icon')->unique();
            $table->string('color')->default('#18191A');
            $table->string('link');

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
        Schema::dropIfExists('footrs');
    }
}
