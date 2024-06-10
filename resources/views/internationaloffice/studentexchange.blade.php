
<x-layout>
    <x-slot name="title">{{ $studentExchange->title }}</x-slot>

    <div class="mt-4">
        <h1 class="text-2xl font-bold">{{ $studentExchange->title }}</h1>
        <img src="{{ $studentExchange->image_url }}" alt="{{ $studentExchange->title }}" class="w-full h-64 object-cover object-center mt-4 rounded-lg shadow-md">
        <div class="mt-4">
            <p class="text-gray-600">{{ $studentExchange->content }}</p>
        </div>
        <div class="mt-4">
            <h2 class="text-xl font-semibold">Exchange Time</h2>
            <p class="text-gray-600">{{ $studentExchange->time }}</p>
        </div>
        <div class="mt-4">
            <h2 class="text-xl font-semibold">Program Details</h2>
            <p class="text-gray-600">{{ $studentExchange->program_details }}</p>
        </div>
        <div class="mt-4">
            <h2 class="text-xl font-semibold">Date</h2>
            <p class="text-gray-600">{{ $studentExchange->date }}</p>
        </div>
        <div class="mt-4">
            <h2 class="text-xl font-semibold">Benefit</h2>
            <p class="text-gray-600">{{ $studentExchange->benefit }}</p>
        </div>
        <div class="mt-4">
            <h2 class="text-xl font-semibold">Description</h2>
            <p class="text-gray-600">{{ $studentExchange->description }}</p>
        </div>
        <div class="mt-4">
            <a href="/studentexchanges" class="block text-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">&laquo; Back to Programs</a>
        </div>
    </div>
</x-layout>