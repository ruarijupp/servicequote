@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white shadow rounded p-6">
    <h2 class="text-2xl font-bold mb-4 flex items-center justify-between">
        Secure Payment
        <span class="text-green-600 text-sm font-semibold">🔒 SSL Encrypted</span>
    </h2>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Card Number</label>
        <input type="text" placeholder="4242 4242 4242 4242" class="w-full p-2 border rounded" />
    </div>

    <div class="flex gap-4 mb-4">
        <div class="flex-1">
            <label class="block text-gray-700 text-sm font-bold mb-2">Expiry</label>
            <input type="text" placeholder="MM/YY" class="w-full p-2 border rounded" />
        </div>
        <div class="flex-1">
            <label class="block text-gray-700 text-sm font-bold mb-2">CVC</label>
            <input type="text" placeholder="123" class="w-full p-2 border rounded" />
        </div>
    </div>

    <div class="text-right text-gray-700 mb-4">
        <strong>Total:</strong> ${{ $quote->budget }} for <strong>{{ $quote->service }}</strong>
    </div>

    <form action="/pay/{{ $quote->id }}" method="POST">
        @csrf
        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded font-semibold">
            Pay ${{ $quote->budget }}
        </button>
    </form>
</div>
@endsection

