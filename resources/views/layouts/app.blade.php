<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">

@include('layouts.navigation')

<main class="p-6">
    <div class="max-w-5xl mx-auto bg-white rounded-xl shadow-sm p-6">
        @yield('content')
    </div>
</main>
@if(session('success'))
    <div class="max-w-6xl mx-auto mt-4">
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg">
            {{ session('success') }}
        </div>
    </div>
@endif

</body>
</html>