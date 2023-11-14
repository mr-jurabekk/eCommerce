<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
           'attribute_id' => 1,
           'name' => [
             'en' => 'red',
             'uz' => 'qizil',
           ],
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'en' => 'black',
                'uz' => 'qora',
            ],
        ]);

        Value::create([
            'attribute_id' => 1,
            'name' => [
                'en' => 'white',
                'uz' => 'oq',
            ],
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'en' => 'MDF',
                'uz' => 'MDF',
            ],
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'en' => 'Iron',
                'uz' => 'Temir',
            ],
        ]);

        Value::create([
            'attribute_id' => 2,
            'name' => [
                'en' => 'Silver',
                'uz' => 'Kumush',
            ],
        ]);
    }
}
