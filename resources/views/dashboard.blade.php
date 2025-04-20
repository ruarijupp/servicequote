@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white rounded shadow mt-8">
    <h1 class="text-2xl font-bold mb-4">Quote Requests</h1>

    @if($quotes->isEmpty())
        <p>No quotes submitted yet.</p>
    @else
    <table class="w-full table-auto border-collapse">
    <thead>
        <tr class="bg-gray-100">
            <th class="p-2 border">Name</th>
            <th class="p-2 border">Email</th>
            <th class="p-2 border">Service</th>
            <th class="p-2 border">Budget</th>
            <th class="p-2 border">Status</th>
            <th class="p-2 border">Submitted</th>
            <th class="p-2 border">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($quotes as $quote)
            <tr>
                <td class="p-2 border">{{ $quote->name }}</td>
                <td class="p-2 border">{{ $quote->email }}</td>
                <td class="p-2 border">{{ $quote->service }}</td>
                <td class="p-2 border">{{ $quote->budget }}</td>
                <td class="p-2 border">{{ ucfirst($quote->payment_status) }}</td>
                <td class="p-2 border">{{ $quote->created_at->format('M d, Y') }}</td>
                <td class="p-2 border text-center">
                    @if (!$quote->paid_at)
                    <a href="/pay/{{ $quote->id }}">
    <button class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
        Pay Now
    </button>
</a>
                        </form>
                    @else
                        <span class="text-green-700 font-semibold">Paid</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    @endif
</div>
@endsection
