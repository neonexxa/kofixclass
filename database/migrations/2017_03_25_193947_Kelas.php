<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('Description');
            $table->string('Date');
            $table->string('Time');
            $table->string('Location');
            $table->string('Poster');
            $table->string('Register_link');
            $table->string('Price');
            $table->string('Trainer');
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
        Schema::dropIfExists('kelas');
    }
}
