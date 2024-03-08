@extends('layouts.app')

@section('title', 'Users')

{{-- normal use "foreach" --}}
{{-- @section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">Users</h1>
    @if ($users->isEmpty() | ($users->count() == 0))
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <p class="text-red-500 text-2xl">No users found</p>
            </div>
        </div>
    @else
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <ul class="flex flex-row justify-center">
                    @foreach ($users as $user)
                        <li class="flex flex-row gap-3">
                            <div>
                                <span class="text-blue-700 font-bold">User name:</span>
                            </div>
                            <div>
                                {{ $user->name }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@endsection --}}

{{-- use "forelse" --}}
@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">Users</h1>
    @forelse ($users as $user)
        <div class="w-full">
            <div class="container mx-auto py-4 text-center">
                <ul class="flex flex-row justify-center">
                    <li class="flex flex-row gap-3">
                        <div>
                            <span class="text-blue-700 font-bold">User name:</span>
                        </div>
                        <div>
                            {{ $user->name }}
                        </div>
                        <div>
                            <span class="text-blue-700 font-bold">Idade:</span>
                        </div>
                        <div>
                            {{ $user->age }}
                        </div>
                    </li>
                </ul>
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

