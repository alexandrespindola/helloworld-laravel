<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('example');
    // }

    public function index()
    {
        return response()->json('Hello Middleware', 200);
    }

    public function noAccess()
    {
        return response()->json('No access', 403);
    }
}
