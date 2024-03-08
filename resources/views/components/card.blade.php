<div class="w-full lg:w-3/12 mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-3 p-5">
    <div class="flex flex-row justify-between">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold self-center">{{ $title }}</div>
        <img src=" {{asset('assets/img/' . $imageName . '.png') }}" alt="django logo" width="128px">
    </div>
    <p class="mt-2 text-gray-500 text-justify">{{ $content }}</p>
</div>
