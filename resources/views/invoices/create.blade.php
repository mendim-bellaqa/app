@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="flex justify-center items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-100">Add New Invoice</h1>
</div>

<!-- Form -->
<div class="flex justify-center items-center mb-6">
    <form action="{{ route('invoices.store') }}" method="POST" class="bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-lg">
        @csrf

        <div class="mb-6">
            <label for="client_id" class="block text-gray-300 text-sm font-semibold mb-2">Client:</label>
            <select name="client_id" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="invoice_number" class="block text-gray-300 text-sm font-semibold mb-2">Invoice Number:</label>
            <input type="text" name="invoice_number" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <!-- Use dynamic dates -->
        <div class="mb-6">
            <label for="invoice_date" class="block text-gray-300 text-sm font-semibold mb-2">Invoice Date:</label>
            <select name="invoice_date" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option value="this_month" data-date="{{ $thisMonth }}">This Month</option>
                <option value="next_month" data-date="{{ $nextMonth }}">Next Month</option>
                <option value="last_month" data-date="{{ $lastMonth }}">Last Month</option>
            </select>
        </div>

        <div class="mb-6">
            <label for="due_date" class="block text-gray-300 text-sm font-semibold mb-2">Due Date:</label>
            <input type="date" name="due_date" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="mb-6">
            <label for="amount" class="block text-gray-300 text-sm font-semibold mb-2">Amount:</label>
            <input type="number" name="amount" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
        </div>

        <div class="mb-6">
            <label for="status" class="block text-gray-300 text-sm font-semibold mb-2">Status:</label>
            <select name="status" required class="w-full px-4 py-2 bg-gray-700 text-gray-300 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                <option value="pending">Pending</option>
                <option value="paid">Paid</option>
                <option value="overdue">Overdue</option>
            </select>
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-orange-500 text-white px-5 py-3 rounded-lg shadow-md hover:bg-orange-600 transition-transform transform hover:scale-105 font-semibold">
                Save Invoice
            </button>
        </div>
    </form>
</div>

@endsection
