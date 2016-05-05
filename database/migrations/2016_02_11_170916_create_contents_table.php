<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('user_id')->unsigned();
            $table->string('image');
            $table->string('video_url');
            $table->string('link_url');
            $table->string('name');
            $table->text('short_desc');
            $table->text('content');
            $table->tinyInteger('recommend');
            $table->enum('types', ['content', 'topic', 'advertise', 'banner']);
            $table->enum('status', ['approve', 'waiting', 'reject']);
            $table->tinyInteger('order')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }
}
