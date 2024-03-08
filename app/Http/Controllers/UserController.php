<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        // $users = User::where('age', '>=', 30)->limit(1)->orderBy('age', 'desc')->get();

        // $age = 30;
        // $users = DB::select("SELECT * FROM users WHERE age= ?", [$age]);

        return view('pages.users', compact('users'));
    }

    public function create()
    {
        User::firstOrCreate(
            ['email' => 'demo@demo.com'],
            [
                'name' => 'John Doe',
                'password' => Hash::make('123456'),
                'age' => 30,
                'address' => '123 Main St, New York, NY',
                'zip_code' => 290909
            ]
        );

        User::firstOrCreate(
            ['email' => 'demo2@demo.com'],
            [
                'name' => 'Jane Doe',
                'password' => Hash::make('123456789'),
                'age' => 25,
                'address' => '456 Main St, New York, NY',
                'zip_code' => 290909
            ]
        );

        User::firstOrCreate(
            ['email' => 'demo3@demo.com'],
            [
                'name' => 'Alice Smith',
                'password' => Hash::make('123456789'),
                'age' => 35,
                'address' => '789 Main St, New York, NY',
                'zip_code' => 290909
            ]
        );

        User::firstOrCreate(
            ['email' => 'demo4@demo.com'],
            [
                'name' => 'Bob Johnson',
                'password' => Hash::make('123456789'),
                'age' => 40,
                'address' => '321 Main St, New York, NY',
                'zip_code' => 290909
            ]
        );


        User::firstOrCreate(
            ['email' => 'demo5@demo.com'],
            [
                'name' => 'Harry Johnson',
                'password' => Hash::make('123456789'),
                'age' => 55,
                'address' => '321 Main St, New York, NY',
                'zip_code' => 290909
            ]
        );

        return redirect()->route('users');
    }
}
