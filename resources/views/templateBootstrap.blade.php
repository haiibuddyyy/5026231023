<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nadya Luthfiyah Rahma : 5026231023</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }

        .jumbotron {
            background-color: #fce4ec;
        }

        .nav-link:hover {
            text-decoration: underline;
        }

        .btn-pink {
            background-color: #ec4899;
            color: white;
        }
        .btn-pink:hover {
            background-color: #db2777;
            color: white;
        }
        th a:hover {
        color: #ec4899 !important; /* pink hover */
        }
        th i {
            vertical-align: middle;
        }
                .toggle-tersedia {
            width: 130px;
            font-weight: 600;
            transition: 0.3s ease-in-out;
        }

        .btn-success {
            background-color: #ec4899 !important;  /* pink */
            border: none;
        }

        .btn-secondary {
            background-color: #9ca3af !important; /* abu */
            border: none;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-pink-50 text-gray-800">

    <!-- Hero Section (Tailwind Style) -->
    <section class="relative bg-pink-100 rounded-b-3xl shadow">
        <div class="h-80 md:h-[400px] bg-cover bg-center rounded-b-3xl"
             style="background-image: url('/images/bgproductive.jpg');">
            <div class="h-full w-full bg-white/30 backdrop-blur-sm flex items-center justify-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Hi there!</h1>
            </div>
        </div>

        <div class="absolute inset-x-0 -bottom-16 flex justify-center">
            <div class="bg-white p-2 rounded-full shadow-xl">
                <img src="/images/profilaku.jpeg"
                     alt="Nadya" class="h-32 w-32 rounded-full object-cover border-4 border-white">
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <div class="pt-24 text-center">
        <h2 class="text-2xl font-bold">Nadya Luthfiyah Rahma</h2>
        <p class="text-gray-600 italic">5026231023</p>
    </div>

    <!-- Navbar (Bootstrap Style) -->
    <nav class="navbar navbar-expand-sm bg-light mt-4 shadow-sm">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">All Front End</a></li>
                <li class="nav-item"><a class="nav-link" href="/pegawai">Pegawai</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tugas CRUD</a></li>
                <li class="nav-item"><a class="nav-link" href="#">EAS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Latihan 1</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Latihan 2</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Latihan 3</a></li>
            </ul>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="text-center text-sm text-gray-500 mt-12 italic py-3">
        &copy; {{ date('Y') }} | Nadya Luthfiyah Rahma - Tugas PWEB 💫
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
