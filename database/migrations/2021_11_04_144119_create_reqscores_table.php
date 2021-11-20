<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqscoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reqscores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('Advance')->default(0);
            $table->integer('Intermediate')->default(0);
            $table->string('Languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reqscores');
    }
}
