<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            'titrefeatures' => 'Features',
            'soustitrefeatures' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            // Feature 1

            'imgfeature1' => 'http://127.0.0.1:8000/assets/img/features-1.png',
            'titrefeature1' => 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.',
            'descriptionfeature1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'item1feature1' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'item2feature1' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
            'item3feature1' => 'Ullam est qui quos consequatur eos accusamus.',
            // Feature 2

            'imgfeature2' => 'http://127.0.0.1:8000/assets/img/features-2.png',
            'titrefeature2' => 'Corporis temporibus maiores provident',
            'descriptionfeature2' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'textfeature2' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            // Feature 3

            'imgfeature3' => 'http://127.0.0.1:8000/assets/img/features-3.png',
            'titrefeature3' => 'Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas',
            'descriptionfeature3' => 'Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.',
            'item1feature3' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'item2feature3' => 'Duis aute irure dolor in reprehenderit in voluptate velit.',
            'item3feature3' => 'Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.',
            // Feature 4

            'imgfeature4' => 'http://127.0.0.1:8000/assets/img/features-4.png',
            'titrefeature4' => 'Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in',
            'descriptionfeature4' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'textfeature4' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
        ]);
    }
}
