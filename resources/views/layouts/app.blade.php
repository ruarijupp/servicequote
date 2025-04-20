<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ServiceQuote</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans">
    <nav class="bg-white shadow p-4">
        <div class="max-w-7xl mx-auto">
            <a href="/" class="font-bold text-xl">ServiceQuote</a>
            <a href="/quote" class="ml-4 text-blue-600 hover:underline">Request a Quote</a>
            @auth
                <a href="/dashboard" class="ml-4 text-blue-600 hover:underline">Dashboard</a>
                <form action="/logout" method="POST" class="inline ml-4">
                    @csrf
                    <button class="text-red-500 hover:underline">Logout</button>
                </form>
            @endauth
            @guest
                <a href="/login" class="ml-4 text-blue-600 hover:underline">Login</a>
            @endguest
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>

