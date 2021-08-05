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
            'name' => 'Familia',
            'reference' => 'B01',
            "created_at" =>  Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
