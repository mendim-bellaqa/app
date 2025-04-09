<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Client;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // Show all invoices
    public function index()
    {
        $invoices = Invoice::with('client')->get(); // Fetch invoices with client details
        return view('invoices.index', compact('invoices'));
    }

    // Show form to create a new invoice
    public function create()
    {
        $clients = Client::all();

        // Get the current date and calculate the dates for this, next, and last month
        $thisMonth = now()->format('Y-m-d');
        $nextMonth = now()->addMonth()->format('Y-m-d');
        $lastMonth = now()->subMonth()->format('Y-m-d');

        return view('invoices.create', compact('clients', 'thisMonth', 'nextMonth', 'lastMonth'));
    }

    // Store the newly created invoice
// app/Http/Controllers/InvoiceController.php

public function store(Request $request)
{
    // Validate and store the invoice
    $validated = $request->validate([
        'client_id' => 'required|exists:clients,id',
        'invoice_number' => 'required|string|max:255',
        'invoice_date' => 'required|date',
        'due_date' => 'required|date',
        'amount' => 'required|numeric',
        'status' => 'required|in:pending,paid,overdue',
    ]);

    $invoice = Invoice::create([
        'client_id' => $validated['client_id'],
        'invoice_number' => $validated['invoice_number'],
        'invoice_date' => $validated['invoice_date'],
        'due_date' => $validated['due_date'],
        'amount' => $validated['amount'],
        'status' => $validated['status'],
    ]);

    // Flash a success message to the session
    session()->flash('success', 'Invoice created successfully!');

    // Redirect back to the invoices page
    return redirect()->route('invoices.index');
}


    // Show the details of a specific invoice
    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    // Update the status of an invoice
    public function updateStatus(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->status = 'paid';  // Mark as paid
        $invoice->save();

        return redirect()->route('invoices.show', $invoice->id)->with('success', 'Invoice marked as paid.');
    }
}
