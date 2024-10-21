<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Data Siswa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa.index') }}">Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guru.index') }}">Guru</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('rayon.index') }}">Rayon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('wilayah.index') }}">Wilayah</a>
            </li>
        </ul>
    </div>
</nav>


    <div class="container mt-4">
        @yield('content')
    </div>

    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Minimart CRUD</p>
    </footer>
</body>
</html>
