<x-layout>
    <x-slot name="title">{{ $shortCourse->title }}</x-slot>

    <div class="mt-4">
        <h1 class="text-2xl font-bold">{{ $shortCourse->title }}</h1>
        <img src="{{ $shortCourse->image_url }}" alt="{{ $shortCourse->title }}" class="w-full h-64 object-cover object-center mt-4 rounded-lg shadow-md">
        
        <div class="mt-4">
            <p class="text-gray-600">{{ $shortCourse->content }}</p>
        </div>

        <div class="mt-4">
            <p><strong>Date:</strong> {{ $shortCourse->date }}</p>
            <p><strong>Time:</strong> {{ $shortCourse->time }}</p>
        </div>

        <div class="mt-4">
            <p><strong>Description:</strong> {{ $shortCourse->description }}</p>
        </div>

        <div class="mt-4">
            <h2 class="text-xl font-semibold">Benefits:</h2>
            <ul class="list-disc list-inside">
                <li>{{ $shortCourse->benefit1 }}</li>
                <li>{{ $shortCourse->benefit2 }}</li>
                <li>{{ $shortCourse->benefit3 }}</li>
            </ul>
        </div>

        <div class="mt-4">
            <a href="{{ route('shortcourses.index') }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">&laquo; Back to Courses</a>
        </div>
    </div>
</x-layout>