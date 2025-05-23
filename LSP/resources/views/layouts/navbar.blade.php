<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link font family -->
    <link href="https://fonts.googleapis.com/css2?family=Teachers:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- link css     -->
    <link rel="stylesheet" href="css/navbar.css">
    <!-- link tailwind -->
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap');

        .outline-text {
            -webkit-text-stroke: 1px black;
            /* Outline hitam */
            text-stroke: 1px black;
            /* Outline hitam */
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .font-cherry {
            font-family: 'Cherry Bomb One', cursive;
        }

        .navbar-links {
            transition: color 3s ease-in-out;
        }

        .logo-shadow-pink {
            text-shadow: 0 0 10px #f472b6, 0 0 20px #f472b6, 0 0 30px #f472b6;
            transition: text-shadow 0.5s ease-in-out;
        }
    </style>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 w-full z-50 bg-transparent transition-all duration-300 ease-in-out">
        <div class="container mx-auto px-3 lg:px-10 md:mx-auto px-4 lg:px-10 flex items-center justify-between py-3">
            <!-- Menu Links -->
            <ul class="hidden md:flex md:space-x-8 md:items-center font-semibold text-black">
                <!-- These items are hidden on smaller screens and displayed from md and up -->
                <li><a href="/" class="hidden md:block hover:text-blue-500">Beranda</a></li>
                <li><a href="/tentang" class="hidden md:block hover:text-blue-500">Tentang Kami</a></li>
                <li><a href="/kurikulum" class="hidden md:block hover:text-blue-500">Kurikulum</a></li>
                <li><a href="#" class="hidden md:block hover:text-blue-500">Kontak Kami</a></li>
                <li><a href="/berita" class="hidden md:block hover:text-blue-500">Berita</a></li>

                <!-- Search Icon (visible on all screens) -->
                <a href="#" class="hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16" class="text-black">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </a>
            </ul>

            <a href="#" class="visible hover:text-blue-500 md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16" class="text-black">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
            </a>

            <!-- Logo -->
            <div class="text-center">
                <a href="#" class="text-2xl font-cherry font-bold text-white tracking-[3px] md:ml-44">TK AGHNIYA ILMAN</a>
            </div>

            <!-- Search and Profile Icon (always visible) -->
            <div class="flex items-center space-x-6">
                <!-- Profile Icon -->
                <a href="/" class="hover:text-blue-500">
                    <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z" fill="#000000"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
    </nav>

    <script>
        window.addEventListener("scroll", function() {
            var navbar = document.querySelector("nav");
            if (window.scrollY > 10) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
    <script>
        window.addEventListener("scroll", function() {
            var navbarLinks = document.querySelectorAll("nav ul li a");
            var section = document.getElementById("tentang-kami");
            var rect = section.getBoundingClientRect();

            if (rect.top < window.innerHeight && rect.bottom >= 0) {
                navbarLinks.forEach(link => link.style.color = "#f472b6"); // Warna pink sesuai kotak pink (#f472b6)
            } else {
                navbarLinks.forEach(link => link.style.color = "black"); // Kembali ke warna awal
            }
        });

        window.addEventListener("scroll", function() {
            var navbarLinks = document.querySelectorAll("nav ul li a");
            var section = document.getElementById("tentang-kami");
            var logo = document.querySelector(".font-cherry"); // Seleksi logo berdasarkan class

            if (section) { // Pastikan elemen tentang-kami ada
                var rect = section.getBoundingClientRect();

                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    navbarLinks.forEach(link => link.style.color = "#f472b6");
                    logo.classList.add("logo-shadow-pink"); // Tambahkan efek shadow pink
                } else {
                    navbarLinks.forEach(link => link.style.color = "black");
                    logo.classList.remove("logo-shadow-pink"); // Hapus efek shadow
                }
            }
        });

        window.addEventListener("scroll", function() {
            var section = document.getElementById("daftar");
            var logo = document.querySelector(".font-cherry");

            if (section) {
                var rect = section.getBoundingClientRect();

                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    logo.classList.add("outline-text"); // Tambahkan efek outline
                } else {
                    logo.classList.remove("outline-text"); // Hapus efek outline
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>