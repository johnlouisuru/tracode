<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJavaquizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('javaquizs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->mediumText('question');
            $table->string('title');
            $table->string('answerkey')->nullable();
            $table->string('answerkey2')->nullable();
            $table->string('answerkey3')->nullable();
            $table->mediumText('trivia');
            $table->string('category');
            $table->integer('point')->default(0);
            $table->string('codes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('javaquizs');
    }
}
