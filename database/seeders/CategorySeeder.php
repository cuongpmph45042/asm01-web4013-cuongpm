<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Căn hộ'],
            ['name' => 'Nhà riêng'],
            ['name' => 'Biệt thự'],
            ['name' => 'Nhà phố'],
            ['name' => 'Văn phòng'],
            ['name' => 'Nhà xưởng']
        ]);
    }
}
