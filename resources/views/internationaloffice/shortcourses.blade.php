<x-layout>
    <x-slot name="title">Short Courses</x-slot>

    <div class="mt-4">
        <h1 class="text-2xl font-bold">International Short Courses</h1>
        <p class="mt-2">Explore our international short courses below:</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
            @foreach ($shortcourses as $course)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <a href="{{ route('shortcourses.show', $course->slug) }}">
                        <img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-full h-48 object-cover object-center">
                    </a>
                    <div class="p-4">
                        <h2 class="font-semibold text-lg">{{ $course->title }}</h2>
                        <p class="text-gray-600">{{ Str::limit($course->content, 100) }}</p>
                        <a href="{{ route('shortcourses.show', $course->slug) }}" class="block text-center mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>