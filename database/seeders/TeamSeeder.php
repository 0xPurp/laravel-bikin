<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
                'titre' => 'Team',
                'sous_titre' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
                'photocrew1' => 'http://127.0.0.1:8000/assets/img/team/team-1.jpg',
                'nomcrew1' => 'Walter White',
                'postecrew1' => 'Chief Executive Officer',
                'photocrew2' => 'http://127.0.0.1:8000/assets/img/team/team-2.jpg',
                'nomcrew2' => 'Sarah Jhonson',
                'postecrew2' => 'Product Manager',
                'photocrew3' => 'http://127.0.0.1:8000/assets/img/team/team-3.jpg',
                'nomcrew3' => 'William Anderson',
                'postecrew3' => 'CTO',
                'photocrew4' => 'http://127.0.0.1:8000/assets/img/team/team-4.jpg',
                'nomcrew4' => 'Amanda Jepson',
                'postecrew4' => 'Accountant'
            ]);
    }
}
