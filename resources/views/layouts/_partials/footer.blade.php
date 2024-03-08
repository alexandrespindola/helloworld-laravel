<footer class="bg-blue-500 text-white shadow-lg">
    <div class="container mx-auto py-3 grid grid-cols-3 items-center">
        <div>
            <h3 class="text-white">Seu Nome ou Logo</h3>
        </div>
        <div class="text-center">
            <p class="text-white text-sm">Direitos autorais &copy; {{ date('Y') }}</p>
        </div>
        <ul class="flex justify-end gap-6">
            <li>
                <a href="{{ route('about') }}" class="text-white hover:text-blue-300">About</a>
            </li>
            <li>
                <a href="{{ route('services') }}" class="text-white hover:text-blue-300">Services</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="text-white hover:text-blue-300">Contact</a>
            </li>
        </ul>
    </div>
</footer>
