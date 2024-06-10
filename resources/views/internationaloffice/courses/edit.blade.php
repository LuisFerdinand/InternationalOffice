@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Edit course form -->
            <form action="{{ route('courses.update', $course->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-gray-300 sm:p-6">
                        <!-- Course form fields -->
                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" name="title" id="title" autocomplete="title" value="{{ $course->title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                                <textarea name="content" id="content" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $course->content }}</textarea>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="image_url" class="block text-sm font-medium text-gray-700">Image URL</label>
                                <input type="text" name="image_url" id="image_url" autocomplete="image_url" value="{{ $course->image_url }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $course->description }}</textarea>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                                <input type="date" name="date" id="date" value="{{ $course->date }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
                                <input type="time" name="time" id="time" value="{{ $course->time }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="benefit1" class="block text-sm font-medium text-gray-700">Benefit 1</label>
                                <input type="text" name="benefit1" id="benefit1" value="{{ $course->benefit1 }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="benefit2" class="block text-sm font-medium text-gray-700">Benefit 2</label>
                                <input type="text" name="benefit2" id="benefit2" value="{{ $course->benefit2 }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="benefit3" class="block text-sm font-medium text-gray-700">Benefit 3</label>
                                <input type="text" name="benefit3" id="benefit3" value="{{ $course->benefit3 }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-300 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection

