<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            // Page D'acceuille
            $table->string('titrehomepage');
            $table->string('sous-titrehomepage');
            $table->string('btnstart');
            // About
            $table->string('titreabout');
            $table->string('sous-titreabout');
            $table->string('btnabout');

            // Cards About
            $table->string('titrecard1');
            $table->string('descriptioncard1');
            $table->string('titrecard2');
            $table->string('descriptioncard2');
            $table->string('titrecard3');
            $table->string('descriptioncard3');
            $table->string('titrecard4');
            $table->string('descriptioncard4');
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
        Schema::dropIfExists('home_pages');
    }
}
