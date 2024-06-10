<x-layout>
    <x-slot name="title">Register</x-slot>

    <div class="mt-4">
        <form method="POST" action="{{ route('register') }}" class="mt-4">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name:</label>
                <input type="text" id="name" name="name" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Register</button>
            </div>
        </form>
    </div>
</x-layout>