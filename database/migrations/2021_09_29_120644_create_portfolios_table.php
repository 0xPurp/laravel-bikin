<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous_titre');
            // Categories
            $table->string('categorie1');
            $table->string('categorie2');
            $table->string('categorie3');
            $table->string('categorie4');
            // Items

            //Item 1
            $table->string('photoitem1');
            $table->string('titreitem1');
            $table->string('descriptionitem1');
            // Item 2
            $table->string('photoitem2');
            $table->string('titreitem2');
            $table->string('descriptionitem2');
            // Item 3
            $table->string('photoitem3');
            $table->string('titreitem3');
            $table->string('descriptionitem3');
            // Item 4
            $table->string('photoitem4');
            $table->string('titreitem4');
            $table->string('descriptionitem4');
            // Item 5
            $table->string('photoitem5');
            $table->string('titreitem5');
            $table->string('descriptionitem5');
            // Item 6
            $table->string('photoitem6');
            $table->string('titreitem6');
            $table->string('descriptionitem6');
            // Item 7
            $table->string('photoitem7');
            $table->string('titreitem7');
            $table->string('descriptionitem7');
            // Item 8
            $table->string('photoitem8');
            $table->string('titreitem8');
            $table->string('descriptionitem8');
            // Item 9
            $table->string('photoitem9');
            $table->string('titreitem9');
            $table->string('descriptionitem9');
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
        Schema::dropIfExists('portfolios');
    }
}
