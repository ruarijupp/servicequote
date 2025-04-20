@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-8">
    <h1 class="text-2xl font-bold mb-4">Request a Quote</h1>

    <form action="/quote" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-semibold">Name</label>
            <input type="text" name="name" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Email</label>
            <input type="email" name="email" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Service Type</label>
            <input type="text" name="service" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <div>
            <label class="block mb-1 font-semibold">Budget (optional)</label>
            <input type="text" name="budget" class="w-full border border-gray-300 rounded p-2">
        </div>

        <div>
            <label class="block mb-1 font-semibold">Message (optional)</label>
            <textarea name="message" rows="4" class="w-full border border-gray-300 rounded p-2"></textarea>
        </div>

        <button type="submit" style="background-color: #2563eb; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem;">
    Submit Request
</button>

    </form>
</div>
@endsection
