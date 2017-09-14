<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReunioesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunioes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('local');
            $table->date('inicio');
            $table->date('fim');

            $table->timestamps();
        });

        Schema::create('reuniao_user', function (Blueprint $table) {
            $table->integer('reuniao_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->primary(['reuniao_id', 'user_id']);
            $table->foreign('reuniao_id')->references('id')->on('reunioes');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reuniao_user');

        Schema::dropIfExists('reunioes');


    }
}
