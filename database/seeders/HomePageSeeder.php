<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_pages')->insert([
            [
                "titrehomepage" => "Build Better Websites With Bikin",
                "sous-titrehomepage" => "We are team of talented designers making websites with Bootstrap",
                "btnstart" => "Get Started",
                "titreabout" => "Voluptatem dignissimos provident quasi",
                "sous-titreabout" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit",
                "btnabout" => "About us",
                "titrecard1" => "Corporis voluptates sit",
                "descriptioncard1" => "Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip",
                "titrecard2" => "Ullamco laboris nisi",
                "descriptioncard2" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt",
                "titrecard3" => "Labore consequatur",
                "descriptioncard3" => "Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere",
                "titrecard4" => "Beatae veritatis",
                "descriptioncard4" => "Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta",
            ]
        ]);
    }
}
