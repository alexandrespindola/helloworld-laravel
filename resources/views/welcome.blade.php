@extends('layouts.app')

@section('title', 'Hello World 8')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">Hello 5</h1>
    <div x-data="{ open: false }">
        <button @click="open = !open" class="bg-blue-400 rounded-md p-2 text-white">Toggle</button>

        <div x-show="open">
            Olá, Alpine.js!
        </div>
    </div>

@endsection
