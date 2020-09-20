<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIframesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iframes', function (Blueprint $table) {
            $table->id();

            $table->enum('type' , ['y' , 't' , 'p'])->nullable();
            $table->string('url_id')->nullable();

            $table->longText('iframe')->nullable();

            $table->unsignedBigInteger('trailer_id')->index()->nullable();
            $table->foreign('trailer_id')->references('id')->on('trailers')
                ->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('iframes');
    }
}
