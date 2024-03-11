<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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

        // User::create([
        //     'id' => 2,
        //     'name' => 'Lara Croft',
        //     'email' => 'lara@example.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        // User::create([
        //     'id' => 3,
        //     'name' => 'Alice Smith',
        //     'email' => 'alice@example.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        // User::create([
        //     'id' => 4,
        //     'name' => 'Luis Alves',
        //     'email' => 'luis@example.com',
        //     'password' => Hash::make('12345678'),
        // ]);

        // DB::table('role_user')->insert([
        //     'role_id' => 1,
        //     'user_id' => 1,
        //     'added_by' => 'juanjo',
        // ]);

        // DB::table('role_user')->insert([
        //     'role_id' => 2,
        //     'user_id' => 1,
        //     'added_by' => 'luis',
        // ]);

        // DB::table('role_user')->insert([
        //     'role_id' => 1,
        //     'user_id' => 2,
        //     'added_by' => 'jose',
        // ]);

        // DB::table('role_user')->insert([
        //     'role_id' => 3,
        //     'user_id' => 2,
        //     'added_by' => 'juanjo',
        // ]);

        // DB::table('role_user')->insert([
        //     'role_id' => 4,
        //     'user_id' => 3,
        //     'added_by' => 'maria',
        // ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 4,
            'added_by' => 'pablo',
        ]);
    }


}
