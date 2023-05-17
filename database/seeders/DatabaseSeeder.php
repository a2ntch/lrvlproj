<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('donations')->insert([
            'donatorname' => Str::random(8),
            'email' => Str::random(10) . '@gmail.com',
            'amount' => mt_rand(1, 50),
            'message' => Str::random(20),
            'date' => '2023-05-17 00:00:00'
        ]);
    }
}
