<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'titre' => '',
            'soustitre' => '',
            // card 1

            'titrecard1' => '',
            'descriptioncard1' => '',
            // card 2

            'titrecard2' => '',
            'descriptioncard2' => '',
            // card 3

            'titrecard3' => '',
            'descriptioncard3' => '',
            // card 4

            'titrecard4' => '',
            'descriptioncard4' => '',
        ]);
    }
}
