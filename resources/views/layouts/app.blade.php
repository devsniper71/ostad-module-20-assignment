<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Contact Management')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 dark:bg-black dark:text-white">
<div class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <header class="bg-white shadow dark:bg-gray-800">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-lg font-semibold text-gray-900 dark:text-white">Contact Management</h1>
            <nav class="flex space-x-4">
                <a href="{{ route('contacts.index') }}" class="hover:text-blue-500">Home</a>
                <a href="{{ route('contacts.create') }}" class="hover:text-blue-500">Create Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 flex-grow">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center py-4 dark:bg-gray-900 dark:text-gray-400">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</div>
</body>
</html>
