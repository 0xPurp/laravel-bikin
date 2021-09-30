<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'titre' => 'Portfolio',
            'sous_titre' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'categorie1' => 'ALL',
            'categorie2' => 'APP',
            'categorie3' => 'CARD',
            'categorie4' => 'WEB',
            'photoitem1' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-1.jpg',
            'titreitem1' => 'App 1',
            'descriptionitem1' => 'APP',
            'photoitem2' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-2.jpg',
            'titreitem2' => 'Web 3',
            'descriptionitem2' => 'WEB',
            'photoitem3' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-3.jpg',
            'titreitem3' => 'App 2',
            'descriptionitem3' => 'APP',
            'photoitem4' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-4.jpg',
            'titreitem4' => 'Card 2',
            'descriptionitem4' => 'CARD',
            'photoitem5' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-5.jpg',
            'titreitem5' => 'Web 2',
            'descriptionitem5' => 'WEB',
            'photoitem6' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-6.jpg',
            'titreitem6' => 'App 3',
            'descriptionitem6' => 'APP',
            'photoitem7' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-7.jpg',
            'titreitem7' => 'Card 1',
            'descriptionitem7' => 'CARD',
            'photoitem8' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-8.jpg',
            'titreitem8' => 'Card 3',
            'descriptionitem8' => 'CARD',
            'photoitem9' => 'http://127.0.0.1:8000/assets/img/portfolio/portfolio-9.jpg',
            'titreitem9' => 'Web 3',
            'descriptionitem9' => 'WEB',

        ]);
    }
}
