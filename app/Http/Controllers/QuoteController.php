<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class QuoteController extends Controller
{
    // Show the quote request form
    public function create()
    {
        return view('quote');
    }

    // Handle form submission
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'service' => 'required',
    ]);

    Quote::create([
        'name' => $request->name,
        'email' => $request->email,
        'service' => $request->service,
        'budget' => $request->budget,
        'message' => $request->message,
        'payment_status' => 'unpaid' // manually set
    ]);

    return redirect('/thanks');
}

    // Admin dashboard – list all quotes
    public function index()
    {
        $quotes = Quote::latest()->get();
        return view('dashboard', compact('quotes'));
    }
}
