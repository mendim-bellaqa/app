<?php

// app/Http/Controllers/ClientController.php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Show all clients
    public function index()
    {
        $clients = Client::all(); // Fetch all clients
        return view('clients.index', compact('clients'));
    }

    // Show the form to create a new client
    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'company_name' => 'required|string',
            'email' => 'required|email|unique:clients,email',
            'phone_number' => 'required|string',
        ]);

        // Create the new client
        Client::create($validated);

        // Flash success message to session
        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }

    public function show($id)
{
    $client = Client::find($id);
    return view('clients.show', compact('client'));
}

  // Show the form to edit the client
  public function edit(Client $client)
  {
      return view('clients.edit', compact('client'));
  }

  // Update the client in the database
  public function update(Request $request, Client $client)
  {
      // Validate the request data
      $validated = $request->validate([
          'name' => 'required|string',
          'company_name' => 'required|string',
          'email' => 'required|email|unique:clients,email,' . $client->id,
          'phone_number' => 'required|string',
      ]);

      // Update the client
      $client->update($validated);

      // Redirect back to the clients index with a success message
      return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
  }

      // Delete the client
      public function destroy(Client $client)
      {
          // Delete the client from the database
          $client->delete();

          // Redirect back to the clients list with a success message
          return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
      }
}
