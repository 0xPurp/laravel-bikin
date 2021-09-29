<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous-titre');
            // Membre 1
            $table->string('photocrew1');
            $table->string('nomcrew1');
            $table->string('postecrew1');
            // Membre 2
            $table->string('photocrew2');
            $table->string('nomcrew2');
            $table->string('postecrew2');
            // Membre 3
            $table->string('photocrew3');
            $table->string('nomcrew3');
            $table->string('postecrew3');
            // Membre 4
            $table->string('photocrew4');
            $table->string('nomcrew4');
            $table->string('postecrew4');

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
        Schema::dropIfExists('teams');
    }
}
