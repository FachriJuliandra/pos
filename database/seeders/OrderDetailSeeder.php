<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $orders = \App\Models\orders::all();

        foreach    ($orders as $order) {
            for ($i = 0; $i < 2; $i++) {
                \App\Models\order_details::create([
                    'order_id' => $order->id,
                    'product_id' => $faker->numberBetween(1, 40),
                    'qty' => $faker->numberBetween(1, 400),
                    'price' => $faker->randomFloat(2,1000, 100000),
                ]);
            }
        }
    }
}
