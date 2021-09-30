<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('soustitre');
            // Card 1
            $table->string('titrecard1');
            $table->text('descriptioncard1');
            // Card 2
            $table->string('titrecard2');
            $table->text('descriptioncard2');
            // Card 3
            $table->string('titrecard3');
            $table->text('descriptioncard3');
            // Card 4 
            $table->string('titrecard4');
            $table->text('descriptioncard4');

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
        Schema::dropIfExists('services');
    }
}
