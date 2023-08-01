<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="mb-5">
        <ul class="nav justify-content-end mx-5 py-2 bg-body rounded shadow-sm">
            <li class="nav-item">
                <a class="nav-link text-body-secondary" aria-current="page" href='{{ url('/') }}'>Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-secondary" href='{{ url('mahasiswa') }}'>Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-body-secondary" href='{{ url('kas') }}'>Kelas</a>
            </li>
        </ul>
    </div>
    <main class="container">
        @include('components.message')
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
