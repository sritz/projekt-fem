<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAndNations extends Migration
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
            $table->string('email');
            $table->string('password');
            $table->unsignedInteger('nation_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('nations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('ruler');
            $table->string('ruler_title');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });

        Schema::table('nations', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('users', function(Blueprint $table) {
            $table->foreign('nation_id')->references('id')->on('nations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('users');
        Schema::dropIfExists('nations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
