<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous_titre');
            
            // Adresse 
            $table->string('titreadresse');
            $table->string('adresse');

            // E-Mail
            $table->string('titremail');
            $table->string('mail1');
            $table->string('mail2');

            // Phone 
            $table->string('titrephone');
            $table->string('phone1');
            $table->string('phone2');

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
        Schema::dropIfExists('contacts');
    }
}
