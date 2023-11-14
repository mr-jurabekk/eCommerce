<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => [
                'en' => 'Chair',
                'uz' => 'Stul'
            ],
        ]);

        Category::create([
            'name' => [
                'en' => 'Table',
                'uz' => 'Stol'
            ],
        ]);

        Category::create([
            'name' => [
                'en' => 'Armchair',
                'uz' => 'Kreslo'
            ],
        ]);

        Category::create([
            'name' => [
                'en' => 'Bed',
                'uz' => 'Divan'
            ],
        ]);
    }
}
