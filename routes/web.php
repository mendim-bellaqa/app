<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InvoiceController;

// Public Welcome Page (Only for Guests)Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');


// Invoice Routes
Route::resource('invoices', InvoiceController::class);
Route::put('invoices/{invoice}/update-status', [InvoiceController::class, 'updateStatus'])->name('invoices.updateStatus');

// Client Routes
Route::resource('clients', ClientController::class);
Route::get('/clients/{id}', [ClientController::class, 'show']);
Route::get('/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');
