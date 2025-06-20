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

        .navbar .nav-link {
        color: #d81b60; /* pink tua */
        font-weight: 500;
        transition: 0.3s;
        }

        .navbar .nav-link:hover {
        color: #880e4f; /* darker on hover */
        text-decoration: underline;
        }

        .btn-success {
            background-color: #ec4899 !important;  /* pink */
            border: none;
        }

        .btn-secondary {
            background-color: #9ca3af !important; /* abu */
            border: none;
        }

        .form-switch-wrapper {
        position: relative;
        width: 150px;
        height: 40px;
        margin: auto;
        }

        .form-switch-wrapper.align-start {
        margin-left: 0 !important;
        margin-right: auto;
        }

        .toggle-tersedia {
        display: none;
        }

        .switch-label {
        display: block;
        width: 100%;
        height: 100%;
        background: #fdfcfc;
        border-radius: 30px;
        position: relative;
        cursor: pointer;
        }

        .switch-label .label-left,
        .switch-label .label-right {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
        font-weight: bold;
        transition: all 0.3s ease;
        z-index: 1;
        color: #eae9e9;
        }

        .label-left {
        left: 10px;
        }

        .label-right {
        right: 10px;
        }

        .knob {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        position: absolute;
        top: 2px;
        transition: all 0.3s ease;
        z-index: 2;
        left: 2px;
        background-color: rgb(255, 150, 167);
        border: 2px solid pink;
        }

        /* ============= Toggle di KANAN (checked) = TIDAK TERSEDIA */
        .toggle-tersedia:checked + .switch-label .knob {
        left: calc(100% - 38px);
        background-color: #d3f0fb;
        border-color: rgb(140, 209, 232);
        }

        /* Teks yang aktif = Tidak Tersedia (kiri) */
        .toggle-tersedia:checked + .switch-label .label-left {
        color: rgb(73, 200, 243);
        font-weight: bold;
        }

        /* Teks yang nonaktif = Tersedia (kanan) */
        .toggle-tersedia:checked + .switch-label .label-right {
        opacity: 0;
        }


        /* ============= Toggle di KIRI (unchecked) = TERSERDIA */
        .toggle-tersedia:not(:checked) + .switch-label .knob {
        left: 2px;
        background-color: pink;
        border-color: rgb(255, 173, 187);
        }

        /* Teks yang aktif = Tersedia (kanan) */
        .toggle-tersedia:not(:checked) + .switch-label .label-right {
        color: rgb(255, 142, 161);
        font-weight: bold;
        }

        /* Teks yang nonaktif = Tidak Tersedia (kiri) */
        .toggle-tersedia:not(:checked) + .switch-label .label-left {
        opacity: 0;
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-pink-50 text-gray-800">

    <section class="relative bg-pink-100 rounded-b-3xl shadow">
        <div class="h-40 md:h-[240px] bg-cover bg-center rounded-b-3xl"
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

    <div class="pt-24 text-center">
        <h2 class="text-2xl font-bold">Nadya Luthfiyah Rahma</h2>
        <p class="text-gray-600 italic">5026231023</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-light mt-4 shadow-sm">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="/frontend">All Front End</a></li>
                <li class="nav-item"><a class="nav-link" href="/pegawai">Pegawai</a></li>
                <li class="nav-item"><a class="nav-link" href="/bolpen">Tugas CRUD</a></li>
                <li class="nav-item"><a class="nav-link" href="/eas">EAS</a></li>
                <li class="nav-item"><a class="nav-link" href="/pagecounter">Latihan 1</a></li>
                <li class="nav-item"><a class="nav-link" href="/karyawan">Latihan 2</a></li>
                <li class="nav-item"><a class="nav-link" href="/karyawan">Latihan 3</a></li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        @yield('content')
    </div>

    <footer class="text-center text-sm text-gray-500 mt-12 italic py-3">
        &copy; {{ date('Y') }} | Nadya Luthfiyah Rahma - Tugas PWEB 💫
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
