<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsharpscoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csharpscorings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('iduser')->default(0);
            $table->integer('idquizz')->default(0);
            $table->integer('point')->default(0);
            $table->string('ans')->nullable();
            $table->string('difficulty')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csharpscorings');
    }
}
