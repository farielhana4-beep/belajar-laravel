<!DOCTYPE html>
<html>
<head>
    <title>CRUD Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional Theme -->
    <style>
        body.dark-mode {
            background-color: #121212;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/produk">CRUD Produk</a>

        <button class="btn btn-outline-light btn-sm" onclick="toggleDark()">
            Toggle Theme
        </button>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script>
function toggleDark(){
    document.body.classList.toggle('dark-mode')
}
</script>

</body>
</html>