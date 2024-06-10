@extends('layouts.app')

@section('title', $exchange->title)

@section('content')
<div class="min-h-full">

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Student Exchange details -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full">
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="font-semibold px-4 py-2">Title</td>
                            <td class="px-4 py-2">{{ $exchange->title }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Image</td>
                            <td class="px-4 py-2"><img src="{{ $exchange->image_url }}" alt="{{ $exchange->title }}" class="w-64 h-48 object-cover object-center"></td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Content</td>
                            <td class="px-4 py-2">{{ $exchange->content }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Date</td>
                            <td class="px-4 py-2">{{ $exchange->date }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Time</td>
                            <td class="px-4 py-2">{{ $exchange->time }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Program Details</td>
                            <td class="px-4 py-2">{{ $exchange->program_details }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Description</td>
                            <td class="px-4 py-2">{{ $exchange->description }}</td>
                        </tr>
                        <tr>
                            <td class="font-semibold px-4 py-2">Benefit</td>
                            <td class="px-4 py-2">{{ $exchange->benefit }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4">
                    <a href="{{ route('exchanges.index') }}" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">&laquo; Back to Exchanges</a>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
