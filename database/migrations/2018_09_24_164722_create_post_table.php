<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title',25);
            $table->string('path',25)->unique();
            $table->integer('type');
            $table->string('thumbnailType',7);
            $table->string('thumbnail',120);
            $table->text('content');
            $table->integer('user')->unsigned();
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
        Schema::dropIfExists('post');
    }
}
