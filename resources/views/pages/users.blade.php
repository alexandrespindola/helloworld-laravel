@extends('layouts.app')

@section('title', 'Users')

{{-- use "forelse" --}}
@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">Users</h1>
    @forelse ($users as $user)
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <div class="bg-white rounded-lg shadow-md p-6 max-w-sm mx-auto">
                    <ul class="list-none">
                        <li class="flex items-center mb-4">
                            <span class="text-blue-700 font-bold mr-2">User name:</span>
                            <span>{{ $user->name }}</span>
                        </li>
                        <li class="flex items-center mb-4">
                            <span class="text-blue-700 font-bold mr-2">Idade:</span>
                            <span>{{ $user->age }}</span>
                        </li>
                        <li class="flex items-center mb-4">
                            <span class="text-blue-700 font-bold mr-2">E-mail:</span>
                            <span>{{ $user->email }}</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-blue-700 font-bold mr-2">Phone:</span>
                            <span>({{ $user->phone->prefix }}) {{ $user->phone->phone_number }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @empty
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <p class="text-red-500 text-2xl">No users found</p>
            </div>
        </div>
    @endforelse
@endsection
