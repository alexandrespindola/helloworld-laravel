<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneSeeder extends Seeder
{
    public function run(): void
    {
        // Phone::create([
        //     'prefix' => 34,
        //     'phone_number' => 1234567890,
        //     'user_id' => 1,
        // ]);

        // Phone::create([
        //     'prefix' => 34,
        //     'phone_number' => 456789123,
        //     'user_id' => 2,
        // ]);

        // Phone::create([
        //     'prefix' => 34,
        //     'phone_number' => 789456123,
        //     'user_id' => 3,
        // ]);

        Phone::create([
            'prefix' => 33,
            'phone_number' => 77777777,
            'user_id' => 1,
        ]);

        Phone::create([
            'prefix' => 39,
            'phone_number' => 8888888,
            'user_id' => 1,
        ]);
    }
}
