<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    public function run(): void
    {
        User::find(2)->address()->create([
            "latitude" => "41.28171968996702",
            "longitude" => "69.21689847578732",
            "region" => "Tashkent",
            "district" => "Chilonzor",
            "street" => "Shirin",
            "home" => "45"
        ]);

        User::find(2)->address()->create([
            "latitude" => "41.28171968996702",
            "longitude" => "69.21689847578732",
            "region" => "Tashkent",
            "district" => "Chilonzor",
            "street" => "Farhod",
            "home" => "42"
        ]);
    }
}
