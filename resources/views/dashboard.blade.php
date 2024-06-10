<x-layout>
    <x-slot name="title">Dashboard</x-slot>

    <!-- <div class="mt-4">
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <p>Welcome to your dashboard!</p>
    </div>
    <form method="POST" action="{{ route('logout') }}" class="mt-4">
        @csrf
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Logout</button>
    </form>
    </div> -->
    <div class="mt-4">
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <p>Welcome, {{ Auth::user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded mt-4">Logout</button>
        </form>
    </div>

</x-layout>