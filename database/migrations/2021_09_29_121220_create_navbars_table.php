<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            // Nom du site 
            $table->string('nomsite');
            
            // Boutons Navbar
            $table->string('btnhome');
            $table->string('btnabout');
            $table->string('btnservices');
            $table->string('btnportfolio');
            $table->string('btnteam');
            $table->string('btncontact');
            $table->string('btngetstarted');
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
        Schema::dropIfExists('navbars');
    }
}
