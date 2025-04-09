@extends('layouts.app')

@section('title', 'Invoices - JB Koskont')

@section('content')
<!-- Page Header -->
<div class="flex flex-col justify-center items-center h-32 space-y-4 mb-6">
    <h1 class="text-3xl font-bold text-gray-100">Invoices</h1>
    <a href="{{ route('invoices.create') }}"
       class="bg-orange-500 text-white px-5 py-3 rounded-lg shadow-md hover:bg-orange-600 transition-transform transform hover:scale-105 font-semibold">
        + Add New Invoice
    </a>
</div>

<!-- Invoices Table -->
<div class="overflow-x-auto bg-gray-900 text-white shadow-lg rounded-xl p-6">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-800 text-left text-gray-300">
                <th class="px-6 py-3 text-sm font-semibold uppercase">Invoice #</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase">Client</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase">Amount</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase">Status</th>
                <th class="px-6 py-3 text-sm font-semibold uppercase text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
                <tr class="border-b border-gray-700 hover:bg-gray-800 transition-all">
                    <td class="px-6 py-4 text-gray-300 text-sm">{{ $invoice->invoice_number }}</td>
                    <td class="px-6 py-4 text-gray-300 text-sm">{{ $invoice->client->name }}</td>
                    <td class="px-6 py-4 text-gray-300 text-sm font-bold">${{ number_format($invoice->amount, 2) }}</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 text-xs font-semibold rounded-full
                            @if($invoice->status == 'paid') bg-green-500 text-black
                            @elseif($invoice->status == 'pending') bg-yellow-500 text-black
                            @else bg-red-500 text-white @endif">
                            {{ ucfirst($invoice->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="{{ route('invoices.show', $invoice->id) }}" class="text-blue-400 hover:text-blue-600 transition-all px-2">
                            🔍 View
                        </a>
                        <a href="{{ route('invoices.edit', $invoice->id) }}" class="text-yellow-400 hover:text-yellow-600 transition-all px-2">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-600 transition-all px-2">
                                🗑️ Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
