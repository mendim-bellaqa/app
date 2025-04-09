@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="flex justify-center items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-100">Add New Client</h1>
</div>

<!-- Form -->
<div class="flex justify-center items-center mb-6">
    <form action="{{ route('clients.store') }}" method="POST" class="bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-lg">
        @csrf

        <div class="mb-6">
            <label for="name" class="block text-gray-300 text-sm font-semibold mb-2">Name:</label>
            <input type="text" name="name" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="mb-6">
            <label for="company_name" class="block text-gray-300 text-sm font-semibold mb-2">Company Name:</label>
            <input type="text" name="company_name" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="mb-6">
            <label for="email" class="block text-gray-300 text-sm font-semibold mb-2">Email:</label>
            <input type="email" name="email" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="mb-6">
            <label for="phone_number" class="block text-gray-300 text-sm font-semibold mb-2">Phone Number:</label>
            <input type="text" name="phone_number" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-orange-500 text-white px-5 py-3 rounded-lg shadow-md hover:bg-orange-600 transition-transform transform hover:scale-105 font-semibold">
                Save Client
            </button>
        </div>
    </form>
</div>
@endsection
