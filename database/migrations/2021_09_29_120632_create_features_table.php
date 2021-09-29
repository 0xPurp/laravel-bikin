<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('titrefeatures');
            $table->string('sous-titrefeatures');
            // Feature 1
            $table->string('imgfeature1');
            $table->string('titrefeature1');
            $table->string('descriptionfeature1');
            $table->string('item1feature1');
            $table->string('item2feature1');
            $table->string('item3feature1');
            // Feature 2
            $table->string('imgfeature2');
            $table->string('titrefeature2');
            $table->string('descriptionfeature2');
            $table->text('textfeature2');
            // Feature 3
            $table->string('imgfeature3');
            $table->string('titrefeature3');
            $table->string('descriptionfeature3');
            $table->string('item1feature3');
            $table->string('item2feature3');
            $table->string('item3feature3');
            // Feature 4
            $table->string('imgfeature4');
            $table->string('titrefeature4');
            $table->string('descriptionfeature4');
            $table->text('textfeature4');
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
        Schema::dropIfExists('features');
    }
}
