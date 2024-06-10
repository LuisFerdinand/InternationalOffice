<x-layout>
    <x-slot name="title">Login</x-slot>

    <div class="mt-4">
        <h1 class="text-2xl font-bold">Login</h1>
        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Login</button>
            </div>
        </form>
    </div>
</x-layout>
