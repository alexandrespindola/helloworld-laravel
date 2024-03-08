@extends('layouts.app')

@section('title', 'Note')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">
        Edit note
    </h1>
    <div class="w-full">
        <div class="container mx-auto flex flex-row justify-center py-10">
            @component('components.button')
                @slot('buttonText', 'Back')
                @slot('buttonRoute', route('note.index'))
            @endcomponent
        </div>
    </div>

    {{-- Manual --}}
    <div class="w-full">
        <div class="container mx-auto py-4 text-center flex flex-row justify-center">
            <form class="w-full max-w-lg mt-5" method="POST" action={{ route('note.update', $note->id) }}>
                @method('PUT')
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">

                        <div class="flex flex-row items-center gap-3">

                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="title">
                                Title:
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="description" type="text" name="title"
                                value="{{ old('title', $note->title ?? '') }}">
                        </div>
                        <div>
                            @error('title')
                                @include('components.error')
                            @enderror
                        </div>

                        <div class="flex flex-row items-center gap-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="description">
                                Description:
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="description" type="text" name="description"
                                value="{{ old('description', $note->description ?? '') }}">
                        </div>
                        <div>
                            @error('description')
                                @include('components.error')
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="w-full">

                        <button
                            class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                            type="submit">
                            Update note
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
