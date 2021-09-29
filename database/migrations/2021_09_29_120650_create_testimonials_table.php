<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('sous-titre');
            // Avis 1
            $table->string('avis1');
            $table->string('photoavis1');
            $table->string('nomavis1');
            $table->string('workavis1');
            // Avis 2
            $table->string('avis2');
            $table->string('photoavis2');
            $table->string('nomavis2');
            $table->string('workavis2');
            // Avis 3
            $table->string('avis3');
            $table->string('photoavis3');
            $table->string('nomavis3');
            $table->string('workavis3');
            // Avis 4
            $table->string('avis4');
            $table->string('photoavis4');
            $table->string('nomavis4');
            $table->string('workavis4');
            // Avis 5
            $table->string('avis5');
            $table->string('photoavis5');
            $table->string('nomavis5');
            $table->string('workavis5');

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
        Schema::dropIfExists('testimonials');
    }
}
