<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $attribute = Attribute::find(1);

        $attribute->value()->create([
            'name' => [
                'en' => 'red',
                'uz' => 'qizil',
            ],
        ]);

        $attribute->value()->create([
            'name' => [
                'en' => 'black',
                'uz' => 'qora',
            ],
        ]);

        $attribute->value()->create([
            'name' => [
                'en' => 'white',
                'uz' => 'oq',
            ],
        ]);


        $attribute = Attribute::find(2);

        $attribute->value()->create([
            'name' => [
                'en' => 'MDF',
                'uz' => 'MDF',
            ],
        ]);

        $attribute->value()->create([
            'name' => [
                'en' => 'Iron',
                'uz' => 'Temir',
            ],
        ]);

        $attribute->value()->create([
            'name' => [
                'en' => 'Silver',
                'uz' => 'Kumush',
            ],
        ]);
    }
}
