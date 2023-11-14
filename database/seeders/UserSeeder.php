<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
           'first_name' => 'Ali',
           'last_name' => 'Valiyev',
           'email' => 'Ali@gmail.com',
           'phone' => '90 900 00 42',
            'password' => 'parol',
        ]);

        $admin->roles()->attach(1);

        User::factory()->count(10)->hasAttached(Role::find(3))->create();
    }
}
