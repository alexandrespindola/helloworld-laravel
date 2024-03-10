@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">Product</h1>
    <div class="w-full">
        <div class="container mx-auto py-4 text-center flex flex-row flex-wrap gap-7 justify-center">
            @forelse ($products as $product)
                <div class="bg-gray-200 p-4 my-3 rounded-lg w-1/4">
                    <h2 class="text-2xl text-blue-800">{{ $product->name }}</h2>
                    <p class="text-blue-600">{{ $product->short_description }}</p>
                    <p class="text-gray-700">{{ $product->description }}</p>
                    <p class="text-gray-700">{{ $product->price }} USD</p>
                </div>
            @empty
                <p class="text-red-500">No products found</p>
            @endforelse
        </div>
    </div>
@endsection
