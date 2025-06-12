<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Penugasan PWEB</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Quicksand&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Quicksand', sans-serif;
    }
    h1, h2 {
      font-family: 'Playfair Display', serif;
    }
  </style>
</head>
<body class="bg-pink-50 text-gray-800 min-h-screen pb-5">

  <section class="relative bg-pink-100 rounded-b-3xl shadow">
    <div class="h-80 md:h-[400px] bg-cover bg-center rounded-b-3xl"
         style="background-image: url('./images/bgproductive.jpg');">
      <div class="h-full w-full bg-white/30 backdrop-blur-sm flex items-center justify-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Hi there!</h1>
      </div>
    </div>

    <!-- Profile Picture -->
    <div class="absolute inset-x-0 -bottom-16 flex justify-center">
      <div class="bg-white p-2 rounded-full shadow-xl">
        <img src="./images/profilaku.jpeg"
             alt="Nadya" class="h-32 w-32 rounded-full object-cover border-4 border-white">
      </div>
    </div>
  </section>

  <div class="pt-24 text-center">
    <h2 class="text-2xl font-bold">Nadya Luthfiyah Rahma</h2>
    <p class="text-gray-600 italic">5026231023</p>
  </div>

<div class="mt-4  justify-center text-center">
    <a href="https://github.com/haiibuddyyy" target="_blank"
       class="inline-block bg-pink-600 text-white px-5 py-2 rounded-full shadow hover:bg-pink-700 transition">
      💻 GitHub Saya
    </a>
  </div>

  <div class="max-w-6xl mx-auto mt-12">
    <h1 class="text-4xl text-pink-700 font-bold text-center mb-10">📚 Halaman Tugas PWEB</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      <a href="{{ url('/blog') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Blog
      </a>
      <a href="{{ url('/satu') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Pertemuan 2
      </a>
      <a href="{{ url('/intro') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Pertemuan 3
      </a>
      <a href="{{ url('/test') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Pertemuan 4 Tugas Bootstrap
      </a>
      <a href="{{ url('/linktree') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Tugas Linktree
      </a>
      <a href="{{ url('/js1') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Pertemuan 7 Javascript
      </a>
      <a href="{{ url('/validasi1') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Pertemuan 7 Validasi Form
      </a>
      <a href="{{ url('/ets') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        ETS
      </a>
      <a href="{{ url('/halo') }}" class="block bg-white hover:bg-pink-100 transition border border-pink-200 shadow rounded-2xl py-5 px-6 text-center text-pink-800 font-semibold">
        Pertemuan 11
      </a>
    </div>

    <p class="text-center text-sm text-gray-500 mt-10 italic">Semua link tugas dari pertemuan 1 sampai akhir ✨</p>
  </div>

</body>
</html>
