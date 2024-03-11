<?php

namespace Database\Seeders;

// use App\Models\User;
// use App\Models\Phone;
use App\Models\User;
// use App\Models\Role;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            // ProductSeeder::class,
            // PhoneSeeder::class,
            UserSeeder::class,
            // RoleSeeder::class,
        ]);
    }
}
