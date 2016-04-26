<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('facebook_id')->unique()->nullable();
            $table->string('avatar');
            $table->string('password', 60);
            $table->string('verify_code', 30);
            $table->enum('types', ['admin', 'employee', 'author', 'member']);
            $table->enum('status', ['disable', 'active', 'banned', 'waiting']);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
