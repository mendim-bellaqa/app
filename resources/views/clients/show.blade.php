@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="flex justify-center items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-100">Client Details</h1>
</div>

<!-- Client Details Section -->
<div class="bg-gray-900 text-white shadow-lg rounded-xl p-6">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-semibold text-gray-300 mb-2">{{ $client->name }}</h2>
            <p class="text-lg text-gray-400">{{ $client->company_name }}</p>
        </div>
        <a href="{{ route('clients.index') }}" class="bg-orange-500 text-white px-5 py-3 rounded-lg shadow-md hover:bg-orange-600 transition-transform transform hover:scale-105 font-semibold">
            ← Back to Clients
        </a>
    </div>

    <!-- Client Info -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gray-800 p-6 rounded-xl">
            <h3 class="text-xl font-semibold text-gray-300 mb-2">Email:</h3>
            <p class="text-gray-400">{{ $client->email }}</p>
        </div>
        <div class="bg-gray-800 p-6 rounded-xl">
            <h3 class="text-xl font-semibold text-gray-300 mb-2">Phone:</h3>
            <p class="text-gray-400">{{ $client->phone_number }}</p>
        </div>
    </div>

    <!-- Actions Section -->
    <div class="mt-6 flex justify-between items-center">
        <a href="{{ route('clients.edit', $client->id) }}" class="bg-blue-500 text-white px-5 py-3 rounded-lg shadow-md hover:bg-blue-600 transition-transform transform hover:scale-105 font-semibold">
            ✏️ Edit Client
        </a>

        <!-- Delete Client Form -->
        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this client?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-5 py-3 rounded-lg shadow-md hover:bg-red-600 transition-transform transform hover:scale-105 font-semibold">
                🗑️ Delete Client
            </button>
        </form>
    </div>
</div>
@endsection
