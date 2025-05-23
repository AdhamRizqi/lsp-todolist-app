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
    <link rel="stylesheet" href="css/navbar2.css">
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

        * {
            box-sizing: border-box;
        }

        html,
        body {
            min-height: 100vh;
        }




        #search {
            display: grid;
            grid-area: search;
            grid-template:
                "search" px
                /* Tinggi baris untuk search 40px */
                / 160px;
            /* Lebar kolom untuk search 160px */
            justify-content: center;
            align-content: center;
            justify-items: stretch;
            align-items: center;
            /* Posisikan input secara vertikal di tengah */
            background: hsl(0, 0%, 99%);
        }

        #search input {
            display: block;
            grid-area: search;
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            /* Lebar 100% mengikuti kolom */
            height: 100%;
            /* Tinggi 100% mengikuti baris */
            background: none;
            padding: 0 30px 0 20px;
            /* Padding untuk teks di dalam input */
            border: none;
            /* Menghilangkan border */
            border-radius: 100px;
            /* Menjaga bentuk input tetap bulat */
            font: 12px/1 system-ui, sans-serif;
            outline: none;
            /* Menghilangkan outline */
            outline-offset: -10px;
            /* Pastikan offset tetap jika diperlukan */
        }



        #search svg {
            grid-area: search;
            overflow: visible;
            color: #FF6057;
            fill: none;
            stroke: currentColor;
        }

        .spark {
            fill: currentColor;
            stroke: none;
            r: 15;
        }

        .spark:nth-child(1) {
            animation:
                spark-radius 2.03s 1s both,
                spark-one-motion 2s 1s both;
        }

        @keyframes spark-radius {
            0% {
                r: 0;
                animation-timing-function: cubic-bezier(0, 0.3, 0, 1.57)
            }

            30% {
                r: 15;
                animation-timing-function: cubic-bezier(1, -0.39, 0.68, 1.04)
            }

            95% {
                r: 8
            }

            99% {
                r: 10
            }

            99.99% {
                r: 7
            }

            100% {
                r: 0
            }
        }

        @keyframes spark-one-motion {
            0% {
                transform: translate(-20%, 50%);
                animation-timing-function: cubic-bezier(0.63, 0.88, 0, 1.25)
            }

            20% {
                transform: rotate(-0deg) translate(0%, -50%);
                animation-timing-function: ease-in
            }

            80% {
                transform: rotate(-230deg) translateX(-20%) rotate(-100deg) translateX(15%);
                animation-timing-function: linear
            }

            100% {
                transform: rotate(-360deg) translate(30px, 100%);
                animation-timing-function: cubic-bezier(.64, .66, 0, .51)
            }
        }

        .spark:nth-child(2) {
            animation:
                spark-radius 2.03s 1s both,
                spark-two-motion 2.03s 1s both;
        }

        @keyframes spark-two-motion {
            0% {
                transform: translate(120%, 50%) rotate(-70deg) translateY(0%);
                animation-timing-function: cubic-bezier(0.36, 0.18, 0.94, 0.55)
            }

            20% {
                transform: translate(90%, -80%) rotate(60deg) translateY(-80%);
                animation-timing-function: cubic-bezier(0.16, 0.77, 1, 0.4)
            }

            40% {
                transform: translate(110%, -50%) rotate(-30deg) translateY(-120%);
                animation-timing-function: linear
            }

            70% {
                transform: translate(100%, -50%) rotate(120deg) translateY(-100%);
                animation-timing-function: linear
            }

            80% {
                transform: translate(95%, 50%) rotate(80deg) translateY(-150%);
                animation-timing-function: cubic-bezier(.64, .66, 0, .51)
            }

            100% {
                transform: translate(100%, 50%) rotate(120deg) translateY(0%)
            }
        }

        .spark:nth-child(3) {
            animation:
                spark-radius 2.05s 1s both,
                spark-three-motion 2.03s 1s both;
        }

        @keyframes spark-three-motion {
            0% {
                transform: translate(50%, 100%) rotate(-40deg) translateX(0%);
                animation-timing-function: cubic-bezier(0.62, 0.56, 1, 0.54)
            }

            30% {
                transform: translate(40%, 70%) rotate(20deg) translateX(20%);
                animation-timing-function: cubic-bezier(0, 0.21, 0.88, 0.46)
            }

            40% {
                transform: translate(65%, 20%) rotate(-50deg) translateX(15%);
                animation-timing-function: cubic-bezier(0, 0.24, 1, 0.62)
            }

            60% {
                transform: translate(60%, -40%) rotate(-50deg) translateX(20%);
                animation-timing-function: cubic-bezier(0, 0.24, 1, 0.62)
            }

            70% {
                transform: translate(70%, -0%) rotate(-180deg) translateX(20%);
                animation-timing-function: cubic-bezier(0.15, 0.48, 0.76, 0.26)
            }

            100% {
                transform: translate(70%, -0%) rotate(-360deg) translateX(0%) rotate(180deg) translateX(20%);
            }
        }




        .burst {
            stroke-width: 3;
        }

        .burst :nth-child(2n) {
            color: #ff783e
        }

        .burst :nth-child(3n) {
            color: #ffab00
        }

        .burst :nth-child(4n) {
            color: #55e214
        }

        .burst :nth-child(5n) {
            color: #82d9f5
        }

        .circle {
            r: 6;
        }

        .rect {
            width: 10px;
            height: 10px;
        }

        .triangle {
            d: path("M0,-6 L7,6 L-7,6 Z");
            stroke-linejoin: round;
        }

        .plus {
            d: path("M0,-5 L0,5 M-5,0L 5,0");
            stroke-linecap: round;
        }




        .burst:nth-child(4) {
            transform: translate(30px, 100%) rotate(150deg);
        }

        .burst:nth-child(5) {
            transform: translate(50%, 0%) rotate(-20deg);
        }

        .burst:nth-child(6) {
            transform: translate(100%, 50%) rotate(75deg);
        }

        .burst * {}

        @keyframes particle-fade {

            0%,
            100% {
                opacity: 0
            }

            5%,
            80% {
                opacity: 1
            }
        }

        .burst :nth-child(1) {
            animation: particle-fade 600ms 2.95s both, particle-one-move 600ms 2.95s both;
        }

        .burst :nth-child(2) {
            animation: particle-fade 600ms 2.95s both, particle-two-move 600ms 2.95s both;
        }

        .burst :nth-child(3) {
            animation: particle-fade 600ms 2.95s both, particle-three-move 600ms 2.95s both;
        }

        .burst :nth-child(4) {
            animation: particle-fade 600ms 2.95s both, particle-four-move 600ms 2.95s both;
        }

        .burst :nth-child(5) {
            animation: particle-fade 600ms 2.95s both, particle-five-move 600ms 2.95s both;
        }

        .burst :nth-child(6) {
            animation: particle-fade 600ms 2.95s both, particle-six-move 600ms 2.95s both;
        }

        @keyframes particle-one-move {
            0% {
                transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001)
            }

            100% {
                transform: rotate(-20deg) translateX(8%) scale(0.5, 0.5)
            }
        }

        @keyframes particle-two-move {
            0% {
                transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001)
            }

            100% {
                transform: rotate(0deg) translateX(8%) scale(0.5, 0.5)
            }
        }

        @keyframes particle-three-move {
            0% {
                transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001)
            }

            100% {
                transform: rotate(20deg) translateX(8%) scale(0.5, 0.5)
            }
        }

        @keyframes particle-four-move {
            0% {
                transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001)
            }

            100% {
                transform: rotate(-35deg) translateX(12%)
            }
        }

        @keyframes particle-five-move {
            0% {
                transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001)
            }

            100% {
                transform: rotate(0deg) translateX(12%)
            }
        }

        @keyframes particle-six-move {
            0% {
                transform: rotate(0deg) translate(-5%) scale(0.0001, 0.0001)
            }

            100% {
                transform: rotate(35deg) translateX(12%)
            }
        }



        .bar {
            width: 100%;
            height: 100%;
            ry: 50%;
            stroke-width: 10;
            animation: bar-in 900ms 3s both;
        }

        @keyframes bar-in {
            0% {
                stroke-dasharray: 0 180 0 226 0 405 0 0
            }

            100% {
                stroke-dasharray: 0 0 181 0 227 0 405 0
            }
        }

        .magnifier {
            animation: magnifier-in 600ms 3.6s both;
            transform-box: fill-box;
        }

        @keyframes magnifier-in {
            0% {
                transform: translate(20px, 8px) rotate(-45deg) scale(0.01, 0.01);
            }

            50% {
                transform: translate(-4px, 8px) rotate(-45deg);
            }

            100% {
                transform: translate(0px, 0px) rotate(0deg);
            }
        }

        .magnifier .glass {
            cx: 27;
            cy: 27;
            r: 8;
            stroke-width: 3;
        }

        .magnifier .handle {
            x1: 32;
            y1: 32;
            x2: 44;
            y2: 44;
            stroke-width: 3;
        }



        #results {
            grid-area: results;
            background: hsl(0, 0%, 95%);
        }
    </style>
    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<nav class="fixed top-0 left-0 w-full z-50 bg-white border-b-4 border-black shadow-md transition-all duration-300 ease-in-out">
    <div class="container mx-auto px-3 lg:px-10 flex items-center justify-between py-3">
        <!-- Menu Links -->
        <ul class="hidden md:flex md:space-x-8 md:items-center font-semibold text-black">
            <li><a href="/" class="hover:text-blue-500">Beranda</a></li>
            <li><a href="/tentang" class="hover:text-blue-500">Tentang Kami</a></li>
            <li><a href="/kurikulum" class="hover:text-blue-500">Kurikulum</a></li>
            <li><a href="/dashboard" class="hover:text-blue-500">Dashboard</a></li>
            <li><a href="/berita" class="hover:text-blue-500">Berita</a></li>
        </ul>

        <!-- Logo -->
        <div class="text-center">
            <a href="/" class="text-2xl font-cherry font-bold text-white tracking-[3px] outline-text">TK AGHNIYA ILMAN</a>
        </div>

        <!-- Profile Icon -->
        <div class="flex items-center space-x-6">
            <a href="#" class="hover:text-blue-500">
                <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z" fill="#000000"></path>
                </svg>
            </a>
        </div>
    </div>
</nav>