<header class="bg-blue-600 p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-white text-2xl font-bold">Contact App</h1>
    <nav>
        <ul class="flex space-x-6">
        <li><a href="{{ route('home') }}" class="text-white hover:underline">Home</a></li>
        <li><a href="{{ route('contacts') }}" class="text-white hover:underline">Contacts</a></li>
        <li><a href="{{ route('profile') }}" class="text-white hover:underline">Profile</a></li>
        <li><a href="{{ route('logout') }}" class="text-white hover:underline">Logout</a></li>
        </ul>
    </nav>
    </div>
</header>
