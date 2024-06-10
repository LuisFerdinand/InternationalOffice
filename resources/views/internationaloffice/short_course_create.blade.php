<x-layout>
    <x-slot name="title">Create Short Course</x-slot>

    <div class="mt-4">
        <h1 class="text-2xl font-bold">Create Short Course</h1>
        <form method="POST" action="{{ route('short-courses.store') }}" class="mt-4">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title:</label>
                <input type="text" id="title" name="title" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-gray-700">Slug:</label>
                <input type="text" id="slug" name="slug" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="image_url" class="block text-gray-700">Image URL:</label>
                <input type="text" id="image_url" name="image_url" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700">Content:</label>
                <textarea id="content" name="content" required class="form-textarea mt-1 block w-full"></textarea>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description" required class="form-textarea mt-1 block w-full"></textarea>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" id="date" name="date" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="time" class="block text-gray-700">Time:</label>
                <input type="time" id="time" name="time" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="benefit1" class="block text-gray-700">Benefit 1:</label>
                <input type="text" id="benefit1" name="benefit1" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="benefit2" class="block text-gray-700">Benefit 2:</label>
                <input type="text" id="benefit2" name="benefit2" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="benefit3" class="block text-gray-700">Benefit 3:</label>
                <input type="text" id="benefit3" name="benefit3" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Create</button>
            </div>
        </form>
    </div>
</x-layout>
