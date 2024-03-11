<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // User::create([
        //     'id' => 1,
        //     'name' => 'John Doe',
        //     'email' => 'example@example.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        User::create([
            'id' => 2,
            'name' => 'Lara Croft',
            'email' => 'lara@example.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'id' => 3,
            'name' => 'Alice Smith',
            'email' => 'alice@example.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
