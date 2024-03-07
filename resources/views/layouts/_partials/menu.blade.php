{{-- <header>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header> --}}

<header class="bg-blue-500 text-white shadow-lg">
    <nav class="container mx-auto px-6 py-3">
        <ul class="flex justify-end">
            <li class="mr-6">
                <a href="{{ route('index') }}" class="text-white hover:text-blue-300">Home</a>
            </li>
            <li class="mr-6">
                <a href="{{ route('about') }}" class="text-white hover:text-blue-300">About</a>
            </li>
            <li class="mr-6">
                <a href="{{ route('services') }}" class="text-white hover:text-blue-300">Services</a>
            </li>
            <li class="mr-6">
                <a href="{{ route('contact') }}" class="text-white hover:text-blue-300">Contact</a>
            </li>
        </ul>
    </nav>
</header>
