<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            'nomsite' => 'Bikin',
            'btnhome' => 'Home',
            'btnabout' => 'About',
            'btnservices' => 'Services',
            'btnportfolio' => 'Portfolio',
            'btnteam' => 'Team',
            'btncontact' => 'Contact',
            'btngetstarted' => 'Get Started',
        ]);
    }
}
