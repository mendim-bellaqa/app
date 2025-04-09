@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="flex justify-center items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-100">Edit Client</h1>
</div>

<!-- Edit Client Form -->
<div class="bg-gray-900 text-white shadow-lg rounded-xl p-6">
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label for="name" class="block text-lg font-semibold text-gray-300 mb-2">Client Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $client->name) }}" class="w-full p-3 rounded-lg bg-gray-800 text-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label for="company_name" class="block text-lg font-semibold text-gray-300 mb-2">Company Name</label>
            <input type="text" id="company_name" name="company_name" value="{{ old('company_name', $client->company_name) }}" class="w-full p-3 rounded-lg bg-gray-800 text-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            @error('company_name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block text-lg font-semibold text-gray-300 mb-2">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $client->email) }}" class="w-full p-3 rounded-lg bg-gray-800 text-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="mb-6">
            <label for="phone_number" class="block text-lg font-semibold text-gray-300 mb-2">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $client->phone_number) }}" class="w-full p-3 rounded-lg bg-gray-800 text-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500" required>
            @error('phone_number') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition-transform transform hover:scale-105 font-semibold">
                Update Client
            </button>
        </div>
    </form>
</div>
@endsection
