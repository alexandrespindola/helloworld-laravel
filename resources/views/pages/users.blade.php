@extends('layouts.app')

@section('title', 'Users')

{{-- use "forelse" --}}
@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">Users</h1>
    <div class="w-full">
        <div class="container mx-auto text-center flex flex-row flex-wrap justify-center gap-3 flex-1 self-center py-10 items-start">
            @forelse ($users as $user)
                <div class="bg-white rounded-lg shadow-md p-10 mx-auto">
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
                        @foreach ($user->phones as $phone)
                            <li class="flex items-center">
                                <span class="text-blue-700 font-bold mr-2">Phone:</span>
                                <span>({{ $phone->prefix }}) {{ $phone->phone_number }}</span>
                            </li>
                        @endforeach
                        @foreach ($user->roles as $role)
                            <li class="flex items-center">
                                <span class="text-blue-700 font-bold mr-2">Role:</span>
                                <span>{{ $role->name }}</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-blue-700 font-bold mr-2">Added by:</span>
                                <span>{{ $role->pivot->added_by }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @empty
                <div class="w-full">
                    <div class="container mx-auto py-4 text-center">
                        <p class="text-red-500 text-2xl">No users found</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
