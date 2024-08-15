@extends('layouts.app')

@section('title', 'Edit Contact')

@section('content')
    <div class="container mx-auto flex justify-center items-center min-h-screen">
        <div class="w-full max-w-lg">
            <h1 class="text-2xl font-semibold mb-6">Edit Contact</h1>
            <form method="POST" action="{{ route('contacts.update', $contact->id) }}" class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" value="{{ $contact->name }}" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" value="{{ $contact->email }}" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="phone" id="phone" class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" value="{{ $contact->phone }}">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" name="address" id="address" class="mt-1 block w-full p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500" value="{{ $contact->address }}">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Update</button>
            </form>
        </div>
    </div>
@endsection
