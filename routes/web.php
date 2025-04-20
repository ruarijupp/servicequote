<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Quote;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;

// Static pages
Route::view('/thanks', 'thanks');
Route::get('/', function () {
    return view('welcome');
});

// Quote form
Route::get('/quote', [QuoteController::class, 'create'])->name('quote.create');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');

// Dashboard
Route::get('/dashboard', [QuoteController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Payment page
Route::get('/pay/{id}', function ($id) {
    $quote = Quote::findOrFail($id);
    return view('payment', compact('quote'));
})->middleware('auth');

Route::post('/pay/{id}', function ($id, Request $request) {
    $quote = Quote::findOrFail($id);
    $quote->update([
        'payment_status' => 'paid',
        'paid_at' => now(),
    ]);
    return redirect('/dashboard')->with('success', 'Payment marked as complete.');
})->middleware('auth');

Route::get('/pay/{id}/fake-gateway', function ($id) {
    $quote = Quote::findOrFail($id);
    return view('fake-gateway', compact('quote'));
})->middleware('auth');
// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

