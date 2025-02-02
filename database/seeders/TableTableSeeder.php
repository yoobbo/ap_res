<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numbers= [1, 2, 3, 4, 5];
        foreach($numbers as $number){
            DB::table('tables')->insert([
                'number' => $number,
            ]);
        }
    }
}
