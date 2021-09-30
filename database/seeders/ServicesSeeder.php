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
            'titre' => 'Services',
            'soustitre' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            // card 1

            'titrecard1' => 'Lorem Ipsum',
            'descriptioncard1' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi',
            // card 2

            'titrecard2' => 'Sed ut perspiciatis',
            'descriptioncard2' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore',
            // card 3

            'titrecard3' => 'Magni Dolores',
            'descriptioncard3' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
            // card 4

            'titrecard4' => 'Nemo Enim',
            'descriptioncard4' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis',
        ]);
    }
}
