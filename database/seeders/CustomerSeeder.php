<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
            for ($i = 0; $i < 10; $i++) {
            \App\Models\customers::create([
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'address' => $faker->address,
                    'phone' => '0'.$faker->numberBetween(81100000000, 85799999999),
                ]);
            
            }
        }
    }

