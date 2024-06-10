<x-layout>
    <x-slot name="title">Create Student Exchange</x-slot>

    <div class="mt-4">
        <h1 class="text-2xl font-bold">Create Student Exchange</h1>
        <form method="POST" action="{{ route('student-exchanges.store') }}" class="mt-4">
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
                <label for="time" class="block text-gray-700">Time:</label>
                <input type="text" id="time" name="time" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="program_details" class="block text-gray-700">Program Details:</label>
                <textarea id="program_details" name="program_details" required class="form-textarea mt-1 block w-full"></textarea>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" id="date" name="date" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="benefit" class="block text-gray-700">Benefit:</label>
                <input type="text" id="benefit" name="benefit" required class="form-input mt-1 block w-full">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description:</label>
                <textarea id="description" name="description" required class="form-textarea mt-1 block w-full"></textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">Create</button>
            </div> 
        </form>
    </div>
</x-layout>

