<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        TK
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="src/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="dist/css/style.css"> -->

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="src/img/favicon.jpg">
</head>
<nav id="header" class="fixed w-full z-30 top-0 text-white bg-gray-900 shadow-lg py-2">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-2 px-4">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/" class="text-white font-bold text-2xl lg:text-4xl">LOGO</a>
        </div>

        <!-- Form Search -->


        <!-- Menu Items -->
        <div id="nav-content"
            class="w-full hidden lg:flex lg:items-center lg:justify-end lg:w-auto  lg:mt-0 text-white text-bold space-x-6">
            <ul class="flex flex-col lg:flex-row gap-4 lg:gap-6">
                <li><a href="/tentang" class="hover:text-blue-400 transition">Tentang Kami</a></li>
                <li><a href="/program" class="hover:text-blue-400 transition">Program Kami</a></li>
                <li><a href="/berita" class="hover:text-blue-400 transition">Artikel</a></li>
                <li><a href="/galeri" class="hover:text-blue-400 transition">Galeri</a></li>
            </ul>
            <a href="http://wa.me/+6281211825947" class="ml-4">
                <button
                    class="bg-white text-gray-800 font-semibold rounded-full py-2 px-6 shadow hover:scale-105 transition duration-300 ease-in-out">
                    Daftar
                </button>
            </a>
        </div>
    </div>
</nav>


<body class="leading-normal tracking-normal bg-[#fffffa] relative" style="font-family: 'Source Sans Pro', sans-serif;">

    <!-- Tombol Kembali animasi garis ke panah -->
    <a href="javascript:history.back()" class="absolute top-14 left-6 z-50">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 24 24"
            fill="none"
            stroke="#374151"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="animate-arrow-circle">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 8 8 12 12 16" />
            <line x1="16" y1="12" x2="8" y2="12" />
        </svg>
    </a>

    <!-- Konten Card -->
    <div class="flex justify-center py-20 mt-5">
        <div class="w-full max-w-5xl h-[70vh] bg-white rounded-lg shadow-lg p-6 md:p-10 overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 h-full">
                <!-- Konten 3/4 -->
                <div class="md:col-span-3 overflow-y-auto pr-4">
                    <div class="flex justify-between items-start">
                        <h1 class="text-3xl font-bold mb-4">{{ $berita->judul }}</h1>
                        <p class="text-sm text-gray-500 text-right whitespace-nowrap">{{ $berita->tanggal }}</p>
                    </div>
                    <p class="text-lg text-gray-700 mb-6">{{ $berita->description }}</p>
                </div>

                <!-- Gambar 1/4 -->
                <div class="md:col-span-1 flex items-center">
                    <img src="{{ asset('storage/' . $berita->image) }}"
                        alt="Berita image"
                        class="w-full h-full object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </div>
</body>
<style>
    .animate-arrow-circle * {
        stroke-dasharray: 100;
        stroke-dashoffset: 100;
        animation: drawPath 1s ease forwards;
    }

    .animate-arrow-circle circle {
        stroke-dasharray: 300;
        stroke-dashoffset: 300;
        animation-delay: 0s;
    }

    .animate-arrow-circle polyline {
        animation-delay: 1s;
    }

    .animate-arrow-circle line {
        animation-delay: 0.6s;
    }

    @keyframes drawPath {
        to {
            stroke-dashoffset: 0;
        }
    }
</style>