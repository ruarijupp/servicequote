@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-8 text-center">
    <h1 class="text-2xl font-bold mb-4">Confirm Payment</h1>

    <p class="mb-2"><strong>Name:</strong> {{ $quote->name }}</p>
    <p class="mb-2"><strong>Email:</strong> {{ $quote->email }}</p>
    <p class="mb-2"><strong>Service:</strong> {{ $quote->service }}</p>
    <p class="mb-4"><strong>Budget:</strong> ${{ $quote->budget }}</p>

    <a href="/pay/{{ $quote->id }}/fake-gateway">
    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded font-semibold">
    Pay Now
</button>

</a>
    @csrf
</form>
</div>
@endsection
