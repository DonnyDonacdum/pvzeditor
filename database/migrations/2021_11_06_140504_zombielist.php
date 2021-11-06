<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Zombielist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spec', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('armortype');
            $table->String('special');
            $table->String('speed');
            $table->text('descrip');
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
        Schema::dropIfExists('spec');
    }
}
