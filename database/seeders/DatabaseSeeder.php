<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ContactSeeder::class,
            FeaturesSeeder::class,
            FooterzSeeder::class,
            HomePageSeeder::class,
            PortfolioSeeder::class,
            NavbarSeeder::class,
            ServicesSeeder::class,
            TeamSeeder::class,
            TestimonialsSeeder::class,
            UserSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
