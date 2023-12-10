<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = Setting::create([
           'name' => [
               'en' => 'language',
               'uz' => 'til'
           ],
            'type' => [
                'switch',
                'select'
            ]
        ]);

        $settings->value()->create([
            'name' => [
                'en' => 'English',
                'uz' => 'Inglizcha'
            ]
        ]);

        $settings->value()->create([
            'name' => [
                'en' => 'Uzbek',
                'uz' => 'O\'zbekcha'
            ]
        ]);



        $settings = Setting::create([
            'name' => [
                'en' => 'Currency',
                'uz' => 'Pul birligi'
            ],
            'type' => [
                'switch',
                'select'
            ]
        ]);

        $settings->value()->create([
            'name' => [
                'en' => 'Sum',
                'uz' => 'So\'m'
            ]
        ]);

        $settings->value()->create([
            'name' => [
                'en' => 'Dollar',
                'uz' => 'Dollar'
            ]
        ]);


        Setting::create([
            'name' => [
                'en' => 'Dark mode',
                'uz' => 'Qora fon'
            ],
            'type' => ['switch']
        ]);

        Setting::create([
            'name' => [
                'en' => 'Notifications',
                'uz' => 'Xabarnomalar'
            ],
            'type' => ['switch']
        ]);
    }
}
