<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('title');
            $table->string('artist');
            $table->enum('type', array('Music'));
            $table->string('url');
            $table->unsignedBigInteger('play_list_id')->index()->nullable();
            $table->text('description')->nullable();
            $table->time('duration')->nullable();
            $table->timestamps();

            $table->foreign('play_list_id')->references('id')->on('playlists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}