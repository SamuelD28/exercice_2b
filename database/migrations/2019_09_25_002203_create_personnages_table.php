<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema for the personnage table
        Schema::create('personnages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->integer('intelligence');
            $table->integer('force');
            $table->integer('dexterite');
            $table->integer('constitution');
            $table->integer('charisme');
            $table->integer('sagesse');
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
        Schema::dropIfExists('personnages');
    }
}
