<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dishes')->insert([
            ['name' => 'steak', 'category' => 1],
            ['name' => 'pizza', 'category' => 1],
            ['name' => 'pasta', 'category' => 1],
        ]);
    }
}
