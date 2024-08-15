@extends('layouts.app')

@section('title', 'View Contact')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-6">Contact Details</h1>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Address:</strong> {{ $contact->address }}</p>
            <a href="{{ route('contacts.index') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Back to Contacts List</a>
        </div>
    </div>
@endsection
