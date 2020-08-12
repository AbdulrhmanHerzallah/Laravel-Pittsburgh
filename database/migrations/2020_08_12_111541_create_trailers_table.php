<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trailers', function (Blueprint $table) {
            $table->id();


            $table->string('title')->unique();
            $table->string('slug')->unique();
//            $table->string('img_url')->nullable();

            $table->longText('desc')->nullable();

            $table->enum('type' , ['y' , 't' , 'p']);
            $table->boolean('is_published')->default(0);

            $table->string('url_id')->nullable();
            $table->longText('iframe')->nullable();


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
        Schema::dropIfExists('trailer');
    }
}
