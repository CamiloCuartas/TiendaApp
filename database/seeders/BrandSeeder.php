<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'reference' => 'B01',
                'name' => 'Kimberly',
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now()
            ],
            [
                'reference' => 'B02',
                'name' => 'Drypers',
                "created_at" =>  Carbon::now(),
                "updated_at" => Carbon::now()
            ]
        ]);
    }
}
