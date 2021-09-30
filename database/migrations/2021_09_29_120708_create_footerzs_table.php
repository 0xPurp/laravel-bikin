<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterzsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footerzs', function (Blueprint $table) {
            $table->id();
            // Infos
            $table->string('titre');
            $table->string('adress');
            $table->string('ville');
            $table->string('pays');

            // Phone & Mail
            $table->string('phonebold');
            $table->string('phone');
            $table->string('mailbold');
            $table->string('mail');

            // Links 
            $table->string('linksbold');
            $table->string('link1');
            $table->string('link2');
            $table->string('link3');
            $table->string('link4');
            $table->string('link5');

            // Service 
            $table->string('servicebold');
            $table->string('service1');
            $table->string('service2');
            $table->string('service3');
            $table->string('service4');
            $table->string('service5');

            // Newsletter
            $table->string('newsletterbold');
            $table->string('newsletter');
            $table->string('btnnews');

            // Copyright & Designed By 
            $table->string('copyright1');
            $table->string('copyright2');
            $table->string('copyright3');
            $table->string('designed1');
            $table->string('designed2');
            $table->string('designedlink');
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
        Schema::dropIfExists('footerzs');
    }
}
