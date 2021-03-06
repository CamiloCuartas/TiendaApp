<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
         User::factory(1)->create();

         $this->call([
             BrandSeeder::class,
             ItemSeeder::class
         ]);
    }
}
