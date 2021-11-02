<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdventureLevel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventure', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('level');
            $table->String('bakcground');
            $table->String('gimmick');
            $table->integer('flag');
            $table->integer('wave');
            $table->text('description');
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
        Schema::dropIfExists('adventure');
    }
}
