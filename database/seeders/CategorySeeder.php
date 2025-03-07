<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Makanan', 'description' => 'kategori makanan'],
            ['name' => 'Minuman', 'description' => 'kategori minuman'],
            ['name' => 'Pakaian', 'description' => 'kategori pakaian'],
            ['name' => 'Elektronik', 'description' => 'kategori elektronik'],
        ];
        \App\Models\Category::insert($data);
    }
}
