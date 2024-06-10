@extends('layouts.app')

@section('title', $course->title)

@section('content')
<div class="min-h-full">

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Short Course details -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full">
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="font-semibold px-4 py-2">Title</td>
                            <td class="px-4 py-2">{{ $course->title }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Image</td>
                            <td class="px-4 py-2"><img src="{{ $course->image_url }}" alt="{{ $course->title }}" class="w-64 h-48 object-cover object-center"></td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Content</td>
                            <td class="px-4 py-2">{{ $course->content }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Date</td>
                            <td class="px-4 py-2">{{ $course->date }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Time</td>
                            <td class="px-4 py-2">{{ $course->time }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Description</td>
                            <td class="px-4 py-2">{{ $course->description }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Benefits</td>
                            <td class="px-4 py-2">
                                <ul class="list-disc list-inside">
                                    <li>{{ $course->benefit1 }}</li>
                                    <li>{{ $course->benefit2 }}</li>
                                    <li>{{ $course->benefit3 }}</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4">
                    <a href="{{ route('courses.index') }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">&laquo; Back to Courses</a>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
