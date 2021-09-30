<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'titre' => 'Contact',
            'sous-titre' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            // Adresse

            'titreadresse' => 'Our Address
            ',
            'adresse' => 'A108 Adam Street, New York, NY 535022

            ',
            // E-Mail

            'titremail' => 'Email Us
            ',
            'mail1' => 'info@example.com
            ',
            'mail2' => 'contact@example.com

            ',
            // Phone

            'titrephone' => 'Call Us
            ',
            'phone1' => '+1 5589 55488 55
            ',
            'phone2' => '+1 6678 254445 41

            ',
        ]);
    }
}
