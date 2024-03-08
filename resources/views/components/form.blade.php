<div class="w-full">
    <div class="container mx-auto py-4 text-center flex flex-row justify-center">
        <form class="w-full max-w-lg mt-5" method="POST" action="{{ $routeForm }}">
            @csrf
            @isset($method)
                @method($method)
            @endisset
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <div class="flex flex-row items-center gap-3">
                        {{-- Title --}}
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                            Title:
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="description" type="text" name="title" value="{{ $formTitleValue }}">
                    </div>
                    <div>
                        @error('title')
                            @include('components.error')
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="flex flex-row items-center gap-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="description">
                            Description:
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="description" type="text" name="description" value="{{ $formDescriptionValue }}">
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

                    {{-- Submit button --}}
                    <button
                        class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        {{ $formButtonText }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
