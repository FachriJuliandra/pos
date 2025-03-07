<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Fachri', 'email' => 'fachriyusuf037@gmail.com', 'password' => bcrypt('Fachri')],
            ['name' => 'Rifki', 'email' => 'ginandra@gmail.com', 'password' => bcrypt('Fachri')],
        ];
        \App\Models\User::insert($data);
    }
}
