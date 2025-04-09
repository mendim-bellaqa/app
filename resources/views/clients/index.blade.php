@extends('layouts.app')

@section('content')

<!-- Success Message -->
@if (session('success'))
    <div id="success-message" class="bg-green-500 text-white p-3 top-200 rounded-lg mb-6 flex justify-between items-center fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-lg transition-all opacity-100">
        <p class="text-sm font-semibold">{{ session('success') }}</p>
        <!-- Dismiss button -->
        <button id="dismiss-button" class="ml-4 text-xl font-bold text-white hover:text-gray-200">
            &times;
        </button>
    </div>

    <script>
        // Automatically hide the message after 3 seconds
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.classList.add('opacity-0');
                successMessage.classList.remove('opacity-100'); // Remove visible class
            }
        }, 3000);

        // Hide the message when clicking the "X" button
        document.getElementById('dismiss-button').addEventListener('click', function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.classList.add('opacity-0');
                successMessage.classList.remove('opacity-100'); // Remove visible class
            }
        });
    </script>
@endif

<!-- Page Header -->
<div class="flex justify-center items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-100">Clients</h1>
</div>
<div class="flex justify-center items-center mb-6">
    <a href="{{ route('clients.create') }}" class="bg-orange-500 text-white px-5 py-3 rounded-lg shadow-md hover:bg-orange-600 transition-transform transform hover:scale-105 font-semibold">
        + Add New Client
    </a>
</div>

<!-- Clients Table -->
<div class="overflow-x-auto bg-gray-900 text-white shadow-lg rounded-xl p-6">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-800 text-left text-gray-300">
                <th class="px-6 py-3 text-sm font-semibold uppercase">Name</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase">Company</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase">Email</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase">Phone</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr class="border-b border-gray-700 hover:bg-gray-800 transition-all">
                    <td class="px-6 py-4 text-gray-300 text-sm">{{ $client->name }}</td>
                    <td class="px-6 py-4 text-gray-300 text-sm">{{ $client->company_name }}</td>
                    <td class="px-6 py-4 text-gray-300 text-sm">{{ $client->email }}</td>
                    <td class="px-6 py-4 text-gray-300 text-sm">{{ $client->phone_number }}</td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('clients.show', $client->id) }}" class="text-blue-400 hover:text-blue-600 transition-all px-2">
                            🔍 View
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
