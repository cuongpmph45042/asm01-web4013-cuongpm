<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 8; $i++) { 
            DB::table('properties')->insert([
                'category_id' => rand(1, 6),
                'title' => fake()->text(40),
                'image' => fake()->imageUrl(),
                'address' => fake()->city(),
                'area' => fake()->randomFloat(2, 1, 100),
                'rooms' => fake()->numberBetween(1, 10),
                'description' => fake()->paragraph(5),
                'price' => fake()->numberBetween(500, 99999)
            ]);
        } 
    }
}
