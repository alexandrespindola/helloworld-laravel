@extends('layouts.app')

@section('title', 'Note')

@section('content')
    <h1 class="bg-yellow-400 text-blue-700 text-4xl">
        Create new Note
    </h1>
    <div class="w-full">
        <div class="container mx-auto flex flex-row justify-center py-10">
            @component('components.button')
                @slot('buttonText', 'Back')
                @slot('buttonRoute', route('note.index'))
            @endcomponent
        </div>
    </div>

    @component('components.form')
        @slot('routeForm', route('note.store'))
        @slot('formTitleValue', old('title'))
        @slot('formDescriptionValue', old('description'))
        @slot('formButtonText', 'Create')
    @endcomponent

@endsection
