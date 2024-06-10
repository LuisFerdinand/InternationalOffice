@extends('layouts.app')

@section('title', 'Student Exchanges')

@section('content')
    <div class="min-h-full">
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl text-gray-900">Data Table</h1>
                    <a href="{{ route('exchanges.create') }}" class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-600 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition duration-150 ease-in-out">Add New</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-100">
                        <thead class="bg-gray-300 ">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Program Details</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Benefit</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($exchanges as $exchange)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $exchange->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($exchange->content, 10) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($exchange->description, 10) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $exchange->date }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $exchange->time }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ Str::limit($exchange->program_details, 10) }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $exchange->benefit }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('exchanges.show', $exchange->slug) }}" class="text-blue-500 hover:text-blue-600 font-medium">View Details</a>                                       
                                        <a href="{{ route('exchanges.edit', $exchange->slug) }}" class="text-green-500 hover:text-green-600 font-medium ml-4">Edit</a>
                                        <form action="{{ route('exchanges.destroy', $exchange->slug) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-600 font-medium ml-4">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>     
    </div>
@endsection
