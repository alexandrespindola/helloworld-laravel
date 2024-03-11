<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'admin',
        ]);

        Role::create([
            'id' => 2,
            'name' => 'staff',
        ]);

        Role::create([
            'id' => 3,
            'name' => 'user',
        ]);

        Role::create([
            'id' => 4,
            'name' => 'guest',
        ]);


    }
}
