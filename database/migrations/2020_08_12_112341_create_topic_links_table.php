<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_links', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('link');

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
        Schema::dropIfExists('topic_links');
    }
}
