<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title', function (Blueprint $table) {
            $table->id();
            $table->string('first_title');
            $table->string('second_title');
            $table->string('third_title');
            $table->string('count_title');
            $table->string('subscribe_title');
            $table->string('meeting_title');
            $table->string('volunteer');
            $table->string('success');
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
        Schema::dropIfExists('title');
    }
}
