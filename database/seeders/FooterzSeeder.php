<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footerzs')->insert([
            // Infos

            'titre' => 'Bikin',
            'adress' => 'A108 Adam Street
            ',
            'ville' => 'New York, NY 535022
            ',
            'pays' => 'United States
            ',
            // Phone & Mail

            'phonebold' => 'Phone: ',
            'phone' => '+1 5589 55488 55',
            'mailbold' => 'Email: ',
            'mail' => 'info@example.com',
            //Links

            'linksbold' => 'Useful Links',
            'link1' => 'Home',
            'link2' => 'About us',
            'link3' => 'Services',
            'link4' => 'Terms of service',
            'link5' => 'Privacy policy',
            // Service

            'servicebold' => 'Our Services',
            'service1' => 'Web Design',
            'service2' => 'Web Development',
            'service3' => 'Product Management',
            'service4' => 'Marketing',
            'service5' => 'Graphic Design',
            // NewsLetter

            'newsletterbold' => 'Join Our Newsletter',
            'newsletter' => 'Tamen quem nulla quae legam multos aute sint culpa legam noster magna',
            'btnnews' => 'Subscribe',
            //Copyright & Designed By

            'copyright1' => 'Copyright',
            'copyright2' => 'Bikin',
            'copyright3' => '. All Rights Reserved',
            'designed1' => 'Designed by',
            'designed2'=> ' BootstrapMade',
            'designedlink' => 'https://bootstrapmade.com/'
        ]);
    }
}
