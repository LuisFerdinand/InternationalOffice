@extends('layouts.app')

@section('title', 'Create Student Exchange')

@section('content')
<div class="min-h-full">
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <form action="{{ route('exchanges.store') }}" method="POST" enctype="multipart/form-data" class="px-4 py-6">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div class="col-span-2 sm:col-span-1">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                            <input type="text" name="title" id="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="image_url" class="block text-sm font-medium text-gray-700">Image URL</label>
                            <input type="text" name="image_url" id="image_url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md" required>
                        </div>
                        <div class="col-span-2">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea name="content" id="content" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" name="date" id="date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                            <input type="time" name="time" id="time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md" required>
                        </div>
                        <div class="col-span-2">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                            <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                        </div>
                        <div class="col-span-2">
                            <label for="benefit" class="block text-sm font-medium text-gray-700">Benefits</label>
                            <input type="text" name="benefit" id="benefit" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md" required>
                        </div>
                        <div class="col-span-2">
                            <label for="program_details" class="block text-sm font-medium text-gray-700">Program Details</label>
                            <textarea name="program_details" id="program_details" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required></textarea>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">Create</button>
                        <a href="{{ route('exchanges.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out ml-4">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
