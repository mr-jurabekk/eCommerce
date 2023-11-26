<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DeliveryMethod::create([
           'name' => [
               'en' => 'Free',
               'uz' => 'Tekin',
           ],
           'estimated_time' => [
               'en' => '10 days',
               'uz' => '10 kun',
           ],
            'sum' => 0
        ]);

        DeliveryMethod::create([
            'name' => [
                'en' => 'Standart',
                'uz' => 'Standart',
            ],
            'estimated_time' => [
                'en' => '5 days',
                'uz' => '5 kun',
            ],
            'sum' => 40000
        ]);

        DeliveryMethod::create([
            'name' => [
                'en' => 'Fast',
                'uz' => 'Tezkor',
            ],
            'estimated_time' => [
                'en' => '1 days',
                'uz' => '1 kun',
            ],
            'sum' => 80000
        ]);
    }
}
