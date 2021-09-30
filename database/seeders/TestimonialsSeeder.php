<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'titre' => 'Testimonials',
            'sous_titre' => 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.',
            'avis1' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'photoavis1' => 'http://127.0.0.1:8000/assets/img/testimonials/testimonials-1.jpg',
            'nomavis1' => 'Saul Goodman',
            'workavis1' => 'Ceo & Founder',
            'avis2' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
            'photoavis2' => 'http://127.0.0.1:8000/assets/img/testimonials/testimonials-2.jpg',
            'nomavis2' => 'Sara Wilsson',
            'workavis2' => 'Designer',
            'avis3' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
            'photoavis3' => 'http://127.0.0.1:8000/assets/img/testimonials/testimonials-3.jpg',
            'nomavis3' => 'Jena Karlis',
            'workavis3' => 'Store Owner',
            'avis4' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
            'photoavis4' => 'http://127.0.0.1:8000/assets/img/testimonials/testimonials-4.jpg',
            'nomavis4' => 'Matt Brandon',
            'workavis4' => 'Freelancer',
            'avis5' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
            'photoavis5' => 'http://127.0.0.1:8000/assets/img/testimonials/testimonials-5.jpg',
            'nomavis5' => 'John Larson',
            'workavis5' => 'Entrepreneur'
            
        ]);
    }
}
