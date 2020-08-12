<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestes', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('desc');
            $table->boolean('main')->default(0);
            $table->string('img_url')->nullable();

            $table->string('web')->nullable();
            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('whatsapp')->nullable();

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
        Schema::dropIfExists('gestes');
    }
}
