@extends('layouts.app')

@section('title', 'Contacts List')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-6">Contact List</h1>

        <!-- Search Form -->
        <form method="GET" action="{{ route('contacts.index') }}" class="mb-6">
            <div class="flex space-x-2">
                <input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}" class="p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500 w-full">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Search</button>
            </div>
        </form>

        <!-- Contact Table -->
        <table class="w-full bg-white rounded-lg shadow-md overflow-hidden">
            <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
            <tr>
                <th class="p-3 text-left"><a href="?sort=name" class="hover:underline">Name</a></th>
                <th class="p-3 text-left">Email</th>
                <th class="p-3 text-left">Phone</th>
                <th class="p-3 text-left">Address</th>
                <th class="p-3 text-left"><a href="?sort=created_at" class="hover:underline">Created At</a></th>
                <th class="p-3 text-left">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($contacts as $contact)
                <tr class="border-b">
                    <td class="p-3">{{ $contact->name }}</td>
                    <td class="p-3">{{ $contact->email }}</td>
                    <td class="p-3">{{ $contact->phone }}</td>
                    <td class="p-3">{{ $contact->address }}</td>
                    <td class="p-3">{{ $contact->created_at->format('d M, Y') }}</td>
                    <td class="p-3 space-x-2">
                        <a href="{{ route('contacts.show', $contact->id) }}" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-3 text-center text-gray-600">No contacts found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
