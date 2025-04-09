<!-- resources/views/invoices/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Invoice Details</h1>

    <div class="invoice-details">
        <h2>Invoice #{{ $invoice->invoice_number }}</h2>
        <p><strong>Client Name:</strong> {{ $invoice->client->name }}</p>
        <p><strong>Company:</strong> {{ $invoice->client->company_name }}</p>
        <p><strong>Email:</strong> {{ $invoice->client->email }}</p>
        <p><strong>Phone Number:</strong> {{ $invoice->client->phone_number }}</p>
        <p><strong>Invoice Date:</strong> {{ $invoice->invoice_date->format('Y-m-d') }}</p>
        <p><strong>Due Date:</strong> {{ $invoice->due_date->format('Y-m-d') }}</p>
        <p><strong>Amount:</strong> ${{ number_format($invoice->amount, 2) }}</p>
        <p><strong>Status:</strong> {{ ucfirst($invoice->status) }}</p>
    </div>

    <hr>

    <div class="invoice-actions">
        <a href="{{ route('invoices.edit', $invoice->id) }}" class="btn btn-primary">Edit Invoice</a>

        <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Invoice</button>
        </form>

        @if ($invoice->status === 'pending')
            <form action="{{ route('invoices.updateStatus', $invoice->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-success">Mark as Paid</button>
            </form>
        @endif
    </div>
@endsection
