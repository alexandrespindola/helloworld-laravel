<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Controllers\ExampleController;
use DragonCode\Contracts\Cashier\Auth\Auth;

Route::get('/users', function (Request $request) {
    // $user = User::find(1);
    // return new UserResource($user);

    $users = User::all();
    return UserResource::collection($users);
});

Route::middleware('example')->get('/test', [ExampleController::class, 'index']);
Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');

Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


