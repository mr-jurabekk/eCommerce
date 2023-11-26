<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'en' => 'Cash',
                'uz' => 'Naqt',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'en' => 'Terminal',
                'uz' => 'Terminal',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'en' => 'Payme',
                'uz' => 'Payme',
            ]
        ]);

        PaymentType::create([
            'name' => [
                'en' => 'Click',
                'uz' => 'Click',
            ]
        ]);
    }
}
