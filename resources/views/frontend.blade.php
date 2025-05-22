<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Halaman Pertemuan 1 - ETS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans p-8">

    <h1 class="text-3xl font-bold mb-6 text-center">Link Semua Halaman (Pertemuan 1 - ETS)</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-4xl mx-auto">
        <a href="{{ url('/blog') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Blog
        </a>
        <a href="{{ url('/satu') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Pertemuan 2
        </a>
        <a href="{{ url('/intro') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Pertemuan 3
        </a>
        <a href="{{ url('/test') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Pertemuan 4 Tugas Bootstrap
        </a>
        <a href="{{ url('/linktree') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Tugas Linktree
        </a>
        <a href="{{ url('/js1') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Pertemuan 7 Javascript
        </a>
        <a href="{{ url('/validasi1') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Pertemuan 7 Validasi Form
        </a>
        <a href="{{ url('/ets') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            ETS
        </a>
        <a href="{{ url('/halo') }}" class="block bg-white shadow-md hover:bg-gray-50 text-center py-4 px-6 rounded-lg border border-gray-200">
            Pertemuan 11
        </a>

    </div>

</body>
</html>
