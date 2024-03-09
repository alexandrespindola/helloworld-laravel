<header class="bg-blue-500 text-white shadow-lg">
    <nav class="container mx-auto py-3">
        <ul class="flex justify-end gap-6">
            <li>
                <a href="{{ route('home') }}" class="text-white hover:text-blue-300">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="text-white hover:text-blue-300">About</a>
            </li>
            <li>
                <a href="{{ route('services') }}" class="text-white hover:text-blue-300">Services</a>
            </li>
            <li>
                <a href="{{ route('users') }}" class="text-white hover:text-blue-300">Users</a>
            </li>
            <li>
                <a href="{{ route('note.index') }}" class="text-white hover:text-blue-300">Notes</a>
            </li>
            <li>
                <a href="{{ route('product.index') }}" class="text-white hover:text-blue-300">Product</a>
            </li>
            <li>
                <a href="{{ route('contact') }}" class="text-white hover:text-blue-300">Contact</a>
            </li>
        </ul>
    </nav>
</header>
