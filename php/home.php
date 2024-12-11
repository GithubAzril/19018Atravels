<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATravels</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../gambar/logo.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900 w-full z-20">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-4 md:mx-auto py-2 pr-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="../gambar/logo.png" class="h-12 w-auto md:h-16" alt="Logo" />
                </a>
                <div class="flex md:order-2 space-x-6">
                    <div class="flex  items-center">
                        <div class="language-container" style="position: relative;">
                            <a href="#" class="items-center mt-1 text-white text-xl" id="language-toggle">
                                <i class="fa-solid fa-globe"></i>
                            </a>
                            <div id="language-options" class="hidden">
                                <div class="bg-white text-black text-start mt-2 rounded shadow">
                                    <a href="#" class="language-option block flex rounded-t border-black py-1 px-4" data-lang="id">Indonesia</a>
                                    <a href="#" class="language-option block rounded-b py-1 px-4" data-lang="en">Inggris</a>
                                </div>
                            </div>
                        </div>
                        <div id="avatar-container" class="flex hidden ml-12  items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                            <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="../gambar/bali.png" alt="user photo">
                            </button>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                                <div class="px-4 py-3">
                                    <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                                </div>
                                <ul class="py-2" aria-labelledby="user-menu-button">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex space-x-8">
                            <a href="" id="daftar-button" class="relative rounded-r-full py-1 font-semibold px-4 bg-blue-400 ml-[5.8rem] text-white ">Daftar</a>
                            <a href="" id="login-button" class="absolute rounded-full py-1 bg-blue-800 px-4 font-semibold text-white">Log in</a>
                        </div>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="flex flex-col p-4 md:p-0 mt-2 font-semibold md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-3">
                        <a href="../php/home.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 md:dark:" aria-current="page" id="nav-home">Beranda</a>
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Hotel <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="mega-menu-dropdown" class="hidden absolute z-10 bg-white rounded-lg shadow-lg w-48 mt-12">
                            <div class="p-4">
                                <h4 class="font-bold mb-2" id="select-region-title">Pilih Daerah</h4>
                                <ul class="flex flex-col">
                                    <li><a href="../hotel/jawa.php" class="block py-1 hover:bg-gray-100" id="java-link">Jawa</a></li>
                                    <li><a href="../hotel/bali.php" class="block py-1 hover:bg-gray-100" id="bali-link">Bali</a></li>
                                    <li><a href="../hotel/sumatra.php" class="block py-1 hover:bg-gray-100" id="sumatra-link">Sumatra</a></li>
                                    <li><a href="../hotel/kalimantan.php" class="block py-1 hover:bg-gray-100" id="kalimantan-link">Kalimantan</a></li>
                                    <li><a href="../hotel/papua.php" class="block py-1 hover:bg-gray-100" id="papua-link">Papua</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative inline-block">
                            <button id="wisata-menu-dropdown-button" id="wisata-drop" data-dropdown-toggle="wisata-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Destinasi<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="wisata-menu-dropdown" class="hidden absolute bg-white rounded-lg shadow-lg w-48 mt-6">
                                <div class="p-4">
                                    <h4 class="font-bold mb-2" id="select-region-title2">Pilih Daerah</h4>
                                    <ul class="flex flex-col">
                                        <li><a href="../destinasi/destinasi_jawa.php" class="block py-1 hover:bg-gray-100" id="java-link2">Jawa</a></li>
                                        <li><a href="../destinasi/destinasi_bali.php" class="block py-1 hover:bg-gray-100" id="bali-link2">Bali</a></li>
                                        <li><a href="../destinasi/destinasi_sumatra.php" class="block py-1 hover:bg-gray-100" id="sumatra-link2">Sumatra</a></li>
                                        <li><a href="../destinasi/destinasi_kalimantan.php" class="block py-1 hover:bg-gray-100" id="kalimantan-link2">Kalimantan</a></li>
                                        <li><a href="../destinasi/destinasi_papua.php" class="block py-1 hover:bg-gray-100" id="papua-link2">Papua</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#footer" id="nav-contact" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 md:dark:" aria-current="page">Tantang Kami</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <section class=" bg-[url('../gambar/background.png')] dark:bg-[url('../gambar/background.png')] bg-cover bg-center w-full p-5 md:p-10 lg:p-10">
        <div class=" mx-auto max-w-screen-xl text-center lg:py-20 relative">
            <a href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-xs bg-white rounded-full text-black px-4 py-1.5 font-semibold me-3">New</span> <span id="New" class="text-sm font-medium">Ada Destinasi Terbaru Nih !!</span>
                <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
            </a>

            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Apakah anda ingin berlibur hari ini?</h1>
            <p id="descripsi" class="mb-8 text-lg font-normal text-white font-semibold lg:text-xl sm:px-16 lg:px-48 dark:text-white">"Apakah Anda siap untuk berpetualang? Temukan destinasi terbaik, nikmati penawaran eksklusif, dan buat kenangan yang akan bertahan seumur hidup!"</p>
            <form id="search-form" class="w-full max-w-md mx-auto pb-4">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari Destinasi</label>
                <div class="relative">
                    <div class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 3.87 7 11 7 11s7-7.13 7-11c0-3.87-3.13-7-7-7zm0 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" />
                            <circle cx="12" cy="9" r="2.5" />
                        </svg>
                    </div>
                    <input type="search" id="search-input" class="block w-full p-4 ps-12 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Destinasi Dan Hotel..." required />
                    <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <div id="search-results" class="hidden mt-4">
                <h4 id="results" class="font-bold text-white ">Hasil Pencarian:</h4>
                <div id="results-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4"></div>
            </div>
            <div class="absolute bottom-0 left-1/2  transform -translate-x-1/2 bg-white p-4 shadow-lg flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 rounded-full hidden sm:flex">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt text-orange-500"></i>
                    <span class="text-sm sm:text-base">Oxford, Great Britain</span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar-alt text-orange-500"></i>
                    <span class="text-sm sm:text-base">29 Oct 24 - 30 Oct 24</span>
                </div>
            </div>
    </section>
    <section class="mt-12 text-center ">
        <h3 class="text-2xl font-bold ">
            Destinasi &amp; Hotel
        </h3>
        <div class="flex justify-center md:order-2  mt-4">
            <a href="#destinasi" class=" nav-link p-4 bg-orange-500 text-white font-bold rounded-l-full" id="destinasi-nav">
                Detinasi
            </a>
            <a href="#hotel" class="bg-white p-4 rounded-r-full font-semibold nav-link" id="hotels-nav">
                Hotel
            </a>
        </div>
    </section>
    <section>
        <div class="container mx-auto" id="content">
            <section id="destinasi" class="section active mt-8 py-20 flex flex-col">
                <h2 id="destinations" class="text-6xl font-bold text-black text-center mb-12">Destinasi Liburan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ">
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Danau Toba" class="w-full h-48 object-cover" src="../gambar/danau toba.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Danau Toba</h4>
                            <p class="text-gray-500">Sumatra</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.4 (1,949)</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Pura Ulun Danu Beratan Bedugul" class="w-full h-48 object-cover" src="../gambar/pura.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Pura Ulun Danu Beratan Bedugul</h4>
                            <p class="text-gray-500">Bali</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.5 (7,886)</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Candi Borobudur" class="w-full h-48 object-cover" src="../gambar/candi prambanan.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Candi Borobudur</h4>
                            <p class="text-gray-500">Jawa</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.7 (9,986)</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Pantai Melawai" class="w-full h-48 object-cover" src="../gambar/Pantai Melawai.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Pantai Melawai</h4>
                            <p class="text-gray-500">Kalimantan</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.4 (6,986)</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Pantai Base-G" class="w-full h-48 object-cover" src="../gambar/Pantai Base-G.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Pantai Base-G</h4>
                            <p class="text-gray-500">Papua</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.9 (8,986)</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
            <section id="hotel" class="section mt-16 flex flex-col">
                <h2 id="hotels-en" class="text-6xl font-bold text-black text-center mb-12">Hotel</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 <img alt=" MG Setos Hotel" class="w-full h-48 object-cover" src="../gambar/hotel semarang.png" />
                    <img alt="Swiss-Belhotel Jayapura" class="w-full h-48 object-cover" src="../gambar/hotel semarang.png" />
                    <div class="p-4">
                        <h4 class="mt-4 font-bold">MG Setos Hotel</h4>
                        <p class="text-gray-500">Kota Semarang Jawa Tengah</p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-gray-600">★ 4.6 (1,422)</span>
                        </div>
                    </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Swiss-Belhotel Jayapura" class="w-full h-48 object-cover" src="../gambar/hotel papua.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Swiss-Belhotel Jayapura, Papua</h4>
                            <p class="text-gray-500">Kota Jayapura Papua</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.8 (1,422)</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Hotel Mercure" class="w-full h-48 object-cover" src="../gambar/hotel mercure.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Hotel Mercure</h4>
                            <p class="text-gray-500">Kota Pontianak Kalimantan</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.6 (2,422)</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Swiss-Belinn Medan" class="w-full h-48 object-cover" src="../gambar/hotel_sumatra.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Swiss-Belinn Medan</h4>
                            <p class="text-gray-500">Kota Pekanbaru Sumatra</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.6 (3,422)</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                        <img alt="Aston Denpasar Hotel" class="w-full h-48 object-cover" src="../gambar/hotel_bali01.png" />
                        <div class="p-4">
                            <h4 class="mt-4 font-bold">Aston Denpasar Hotel & Convention Center</h4>
                            <p class="text-gray-500">Kota Nusa Dua Bali</p>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-gray-600">★ 4.8 (6,322)</span>
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </section>

    <section>
        <div id="login-modal" class="hidden pt-12 fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="rounded-lg shadow-lg flex overflow-hidden max-w-4xl w-full">
                <a href="#" id="backButton" class=" absolute m-4 flex items-center ">
                    <i class="fa-solid fa-arrow-left text-white mr-2"></i>
                    <span class="text-white font-semibold">Kembali</span>
                </a>
                <div class="bg-cover bg-center w-1/2 p-10 flex-1 flex flex-col items-center justify-center" style="background-image: url('../gambar/ilustrasi destinasi (3).png');  object-fit:cover;">
                </div>
                <div class="bg-gray-800 text-white p-12 flex-1 flex flex-col justify-center">
                    <div class="mb-6 text-center">
                        <img alt="Logo" class="mb-4 rounded-full " src="../gambar/logo.png" width="140" />
                        <h2 class="text-2xl font-bold">Selamat Datang</h2>
                        <p class="text-gray-400 font-semibold">Login Terlebih Dahulu</p>
                    </div>
                    <form id="login-form" method="POST">
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium text-gray-400" for="username">Username</label>
                            <input id="login-username" name="username" class="mt-1 block w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-gray-500" type="text" placeholder="Username" required autocomplete="username" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium text-gray-400" for="password">Password</label>
                            <input name="login-password" class="mt-1 block w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-gray-500" id="login-password" type="password" placeholder="Password" required autocomplete="current-password" />
                        </div>
                        <div class="flex items-center justify-between mb-6">
                            <label class="flex items-center text-sm text-gray-400">
                                <input type="checkbox" id="show-password" class="form-checkbox bg-gray-700 border-gray-600 text-gray-500" onclick="togglePasswordVisibility()" />
                                <span class="ml-2">Tampilkan Password</span>
                            </label>
                        </div>
                        <button class="w-full py-2 bg-white text-gray-800 rounded-md font-semibold hover:bg-gray-200" type="submit">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="daftar-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="rounded-lg shadow-lg flex overflow-hidden max-w-4xl w-full">
                <a href="#" id="kembaliButton" class="absolute m-4 flex items-center">
                    <i class="fa-solid fa-arrow-left text-white mr-2"></i>
                    <span class="text-white font-semibold">Kembali</span>
                </a>
                <div class="bg-cover bg-center w-1/2 p-10 flex-1 flex flex-col items-center justify-center" style="background-image: url('../gambar/ilustrasi destinasi (3).png'); object-fit:cover;">
                </div>
                <div class="bg-gray-800 text-white p-12 flex-1 flex flex-col justify-center">
                    <div class="mb-6 text-center">
                        <img alt="Logo" class="mb-4 rounded-full" src="../gambar/logo.png" width="140" />
                        <h2 class="text-2xl font-bold">Daftar Akun</h2>
                        <p class="text-gray-400 font-semibold">Isi form di bawah ini untuk mendaftar</p>
                    </div>
                    <form id="daftar-form" method="POST">
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium text-gray-400" for="username">Username</label>
                            <input id="username" name="username" class="mt-1 block w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-gray-500" type="text" placeholder="Username" required autocomplete="username" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium text-gray-400" for="email">Email</label>
                            <input id="email" name="email" class="mt-1 block w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-gray-500" type="email" placeholder="Email" required autocomplete="email" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-white text-sm font-medium text-gray-400" for="password">Password</label>
                            <input name="password" class="mt-1 block w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-gray-500" id="password" type="password" placeholder="Password" required autocomplete="new-password" />
                        </div>
                        <div class="flex items-center justify-between mb-6">
                            <label class="flex items-center text-sm text-gray-400">
                                <input type="checkbox" id="lihat-password" class="form-checkbox bg-gray-700 border-gray-600 text-gray-500" />
                                <span class="ml-2">Tampilkan Password</span>
                            </label>
                        </div>
                        <button class="w-full py-2 bg-white text-gray-800 rounded-md font-semibold hover:bg-gray-200" type="submit">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-16 bg-black text-white pt-8 pb-8">
        <h3 id="exclusive" class="text-2xl text-center md:text-start font-bold ">
            Exclusive
        </h3>
        <h2 id="ofers" class="text-4xl md:text-9xl font-bold text-center md:text-start ">
            Penawaran Menarik
        </h2>
        <div class="flex items-start">
            <div class="flex overflow-x-auto space-x-4 p-4 draggable" id="card-container">
                <div id="hotel-container" class="flex space-x-4 text-black ">
                    <a href="../hotel/jawa.php?hotel=Hotel%20Grand%20Orchid%20Solo&discount=25&originalPrice=200000" class="bg-white rounded-3xl shadow-lg p-4 w-64 relative">
                        <div class="flex flex-col items-center justify-center">
                            <img alt="Hotel Grand Orchid Solo" class="rounded-2xl" height="150" src="https://storage.googleapis.com/a1aa/image/u92qlJzeBmz9daiXVeqxVdNABFtCo2zZfiin8nVxN74kPmrnA.jpg" width="200" />
                        </div>
                        <h4 class="mt-4 font-bold">
                            Hotel Grand Orchid Solo
                        </h4>
                        <p class="text-gray-500">
                            Jawa
                        </p>
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full">
                            <span class="font-bold">Diskon: 25%</span>
                        </div>
                    </a>
                    <a href="../hotel/kalimantan.php?hotel=Swiss-Belhotel%20Danum%20Palangka%20Raya&discount=10&originalPrice=700000" class="bg-white rounded-3xl shadow-lg p-4 w-64 relative">
                        <div class="flex flex-col items-center justify-center">
                            <img alt="Swiss-Belhotel Danum Palangka Raya" class="rounded-2xl" height="150" src="../gambar/kamar.png" width="200" />
                        </div>
                        <h4 class="mt-4 font-bold">
                            Swiss-Belhotel Danum Palangka Raya
                        </h4>
                        <p class="text-gray-500">
                            Kalimantan
                        </p>
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full">
                            <span class="font-bold">Diskon: 10%</span>
                        </div>
                    </a>
                    <a href="../hotel/sumatra.php?hotel=Hotel%20Truntum%20Padang&discount=15&originalPrice=650000" class="bg-white rounded-3xl shadow-lg p-4 w-64 relative">
                        <div class="flex flex-col items-center justify-center">
                            <img alt="Hotel Truntum Padang" class="rounded-2xl" height="150" src="../gambar/kamar2.png" width="200" />
                        </div>
                        <h4 class="mt-4 font-bold">
                            Hotel Truntum Padang
                        </h4>
                        <p class="text-gray-500">
                            Sumatra
                        </p>
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full">
                            <span class="font-bold">Diskon: 15%</span>
                        </div>
                    </a>
                    <a href="../hotel/bali.php?hotel=favehotel%20-%20Kartika%20Plaza%20Kuta&discount=20&originalPrice=800000" class="bg-white rounded-3xl shadow-lg p-4 w-64 relative">
                        <div class="flex flex-col items-center justify-center">
                            <img alt="favehotel - Kartika Plaza Kuta" class="rounded-2xl" height="150" src="https://storage.googleapis.com/a1aa/image/MQieCFYDfguAh0leB4A6sUefbxxVbbee6EsmQeCRWm9K1Hz1TA.jpg" width="200" />
                        </div>
                        <h4 class="mt-4 font-bold">
                            favehotel - Kartika Plaza Kuta
                        </h4>
                        <p class="text-gray-500">
                            Bali
                        </p>
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full">
                            <span class="font-bold">Diskon: 20%</span>
                        </div>
                    </a>
                    <a href="hote/papua .php?hotel=Swiss-Belhotel%20Papua&discount=15&originalPrice=750000" class="bg-white rounded-3xl shadow-lg p-4 w-64 relative">
                        <div class="flex flex-col items-center justify-center">
                            <img alt="favehotel - Kartika Plaza Kuta" class="rounded-2xl" height="150" src="https://storage.googleapis.com/a1aa/image/MQieCFYDfguAh0leB4A6sUefbxxVbbee6EsmQeCRWm9K1Hz1TA.jpg" width="200" />
                        </div>
                        <h4 class="mt-4 font-bold">
                            Swiss-Belhotel Papua
                        </h4>
                        <p class="text-gray-500">
                            Papua
                        </p>
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-2 py-1 rounded-full">
                            <span class="font-bold">Diskon: 15%</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="bg-white dark:bg-gray-900 mt-10">
        <div class="mx-auto w-full max-w-screen">
            <div class="grid grid-cols-2  gap-12 px-12 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 id="footer-company" class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Perusahaan</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class=" hover:underline">About</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Brand Center</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 id="footer-help" class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Pusat Bantuan</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Instagram</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 id="footer-language" class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-wh ite">Bahasa :</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Indonesia</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Engglish</a>
                        </li>
                    </ul>
                </div>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="64" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg>
                        <span class="sr-only">Instagram</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="64" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 4.42 3.58 8 8 8 4.42 0 8-3.58 8-8 0-4.42-3.58-8-8-8zm1.5 8H7v5H5V8H4V6h1V5c0-1.1.9-2 2-2h1v2H7c-.55 0-1 .45-1 1v1h2l-1 2z" />
                        </svg>
                        <span class="sr-only">Facebook</span>
                    </a>
                    <a href="#" class=" text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="64" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.036 0 9.32-5 9.32-9.32 0-.142 0-.283-.01-.423A6.675 6.675 0 0 0 16 3.542a6.56 6.56 0 0 1-1.889.517 3.293 3.293 0 0 0 1.44-1.815 6.57 6.57 0 0 1-2.084.793A3.281 3.281 0 0 0 7.875 6.5c0 .257.03.507.086.748A9.32 9.32 0 0 1 1.11 4.15a3.283 3.283 0 0 0 1.016 4.375A3.27 3.27 0 0 1 .64 8.1v.04a3.283 3.283 0 0 0 2.634 3.215 3.28 3.28 0 0 1-.865.115c-.21 0-.415-.02-.615-.058a3.283 3.283 0 0 0 3.065 2.28A6.578 6.578 0 0 1 0 14.54a9.305 9.305 0 0 0 5.026 1.475" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                </div>
            </div>
            <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:text-center md:items-center ">
                <span id="copyright" class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© <a href="">ATravels</a> | Mengelilingi Dunia
                </span>
            </div>
        </div>
    </footer>
</body>
<script>
    $(document).ready(function() {
        $('#lihat-password').change(function() {
            const passwordInput = $('#password'); // Ambil input password
            if ($(this).is(':checked')) {
                passwordInput.attr('type', 'text'); // Ubah tipe input menjadi text
            } else {
                passwordInput.attr('type', 'password'); // Kembalikan tipe input menjadi password
            }
        });
        // Menangani klik pada tombol Daftar untuk menampilkan modal
        $('#daftar-button').click(function(event) {
            event.preventDefault(); // Mencegah aksi default link
            $('#daftar-modal').removeClass('hidden'); // Menampilkan modal
        });

        // Menangani klik pada tombol Kembali di modal pendaftaran
        $('#kembaliButton').click(function(event) {
            event.preventDefault(); // Mencegah aksi default link
            $('#daftar-modal').addClass('hidden'); // Menyembunyikan modal
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#show-password').change(function() {
            const passwordInput = $('#login-password');
            if ($(this).is(':checked')) {
                passwordInput.attr('type', 'text'); // Ubah tipe input menjadi text
            } else {
                passwordInput.attr('type', 'password'); // Kembalikan tipe input menjadi password
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#daftar-button').click(function(event) {
            event.preventDefault(); // Mencegah aksi default link
            $('#daftar-modal').removeClass('hidden'); // Menampilkan modal
        });

        $('#backButton').click(function(event) {
            event.preventDefault(); // Mencegah aksi default link
            $('#daftar-modal').addClass('hidden'); // Menyembunyikan modal
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#backButton').on('click', function(e) {
            e.preventDefault();
            $('#login-modal').addClass('hidden');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#login-button').on('click', function(e) {
            e.preventDefault(); // Mencegah perilaku default dari tautan
            $('#login-modal').toggleClass('hidden'); // Tampilkan atau sembunyikan modal login
        });

        // Menangani klik di luar modal untuk menutup modal
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#login-modal').length && !$(event.target).closest('#login-button').length) {
                $('#login-modal').addClass('hidden'); // Sembunyikan modal login
            }
        });
    });

    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('show-password');
        passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
    }
</script>

<script>
    $(document).ready(function() {

        if (sessionStorage.getItem('isLoggedIn')) {
            $('#daftar-modal').addClass('hidden');
            $('#daftar-button').hide();
            $('#login-button').hide();
            $('#avatar-container').removeClass('hidden');
            $('#user-name').text(sessionStorage.getItem('username'));
        }
        $('#login-form').on('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form default
            $.ajax({
                url: '../koneksi/login.php', // Sesuaikan dengan path ke file login.php
                type: 'POST',
                data: $(this).serialize(), // Mengambil data dari form
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        if (response.role === 'admin') {
                            window.location.href = '../admin/admin.php'; // Redirect ke halaman admin
                        } else {
                            // Update avatar dan tetap di halaman yang sama
                            $('#avatar-container').removeClass('hidden'); // Tampilkan avatar
                            $('#user-name').text(response.username); // Tampilkan nama user
                            $('#login-modal').addClass('hidden'); // Sembunyikan modal
                        }
                    } else {
                        alert(response.message); // Tampilkan pesan kesalahan
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan. Silakan coba lagi.'); // Tampilkan pesan kesalahan
                }
            });
        });

        $('#daftar-form').on('submit', function(event) {
            event.preventDefault();
            $.ajax({
                url: '../koneksi/daftar.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        alert('Selamat Anda berhasil mendaftar');
                        $('#daftar-modal').addClass('hidden');
                        $('#daftar-button').hide();
                        $('#login-button').hide();
                        $('#avatar-container').removeClass('hidden');
                        $('#user-name').text(response.username);

                        sessionStorage.setItem('isLoggedIn', true);
                        sessionStorage.setItem('username', response.username);
                    } else {
                        alert(response.message);
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan. Silakan coba lagi.');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Menangani klik pada hamburger menu untuk menampilkan menu
        $('button[data-collapse-toggle="navbar-search"]').on('click', function() {
            $('#navbar-search').toggleClass('hidden');
        });

        $(document).on('click', function(event) {
            if (!$(event.target).closest('button[data-collapse-toggle="navbar-search"]').length && !$(event.target).closest('#navbar-search').length) {
                $('#navbar-search').addClass('hidden');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Event listener untuk elemen link
        $('.nav-link').on('click', function() {
            // Menghapus kelas latar belakang dari kedua elemen
            $('.nav-link').removeClass('bg-orange-500 text-white').addClass('bg-white text-black');

            // Menambahkan kelas latar belakang pada elemen yang diklik
            $(this).removeClass('bg-white text-black').addClass('bg-orange-500 text-white');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.section').hide();
        $('.section.active').show();

        // Event listener untuk tautan navigasi
        $('.nav-link').click(function(e) {
            e.preventDefault(); // Mencegah perilaku default dari tautan

            // Ambil ID target dari href
            var targetId = $(this).attr('href');

            // Sembunyikan semua section
            $('.section').hide();

            // Tampilkan section yang sesuai dengan target ID
            $(targetId).show();

            // Mengubah kelas active pada section
            $('.section').removeClass('active');
            $(targetId).addClass('active');
        });
    });
</script>

<script>
    const cardContainer = document.getElementById('card-container');

    let isDown = false;
    let startX;
    let scrollLeft;

    cardContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        cardContainer.classList.add('active');
        startX = e.pageX - cardContainer.offsetLeft;
        scrollLeft = cardContainer.scrollLeft;
    });

    cardContainer.addEventListener('mouseleave', () => {
        isDown = false;
        cardContainer.classList.remove('active');
    });

    cardContainer.addEventListener('mouseup', () => {
        isDown = false;
        cardContainer.classList.remove('active');
    });

    cardContainer.addEventListener('mousemove', (e) => {
        if (!isDown) return; // stop the fn from running
        e.preventDefault();
        const x = e.pageX - cardContainer.offsetLeft;
        const walk = (x - startX) * 2; // the multiplier controls the scroll speed
        cardContainer.scrollLeft = scrollLeft - walk;
    });
</script>
<script>
    $(document).ready(function() {
        $('#mega-menu-dropdown-button').on('click', function(e) {
            e.preventDefault(); // Mencegah perilaku default dari tautan
            $('#mega-menu-dropdown').toggleClass('hidden'); // Tampilkan atau sembunyikan mega-menu
        });

        // Menyembunyikan mega-menu jika pengguna mengklik di luar mega-menu
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#mega-menu-dropdown-button').length && !$(event.target).closest('#mega-menu-dropdown').length) {
                $('#mega-menu-dropdown').addClass('hidden'); // Sembunyikan mega-menu
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#wisata-menu-dropdown-button').on('click', function(e) {
            e.preventDefault();
            $('#wisata-menu-dropdown').toggleClass('hidden');
        });
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#wisata-menu-dropdown-button').length && !$(event.target).closest('#rental-menu-dropdown').length) {
                $('#wisata-menu-dropdown').addClass('hidden');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        const destinations = [{
                name: "Danau Toba",
                type: "destinasi",
                image: "../gambar/danau toba.png",
                link: "../destinasi/destinasi_sumatra.php"
            },
            {
                name: "Pura Ulun Danu Beratan Bedugul",
                type: "destinasi",
                image: "../gambar/pura.png",
                link: "../destinasi/destinasi_bali.php"
            },
            {
                name: "Candi Borobudur",
                type: "destinasi",
                image: "../gambar/candi prambanan.png",
                link: "../destinasi/destinasi_jawa.php"
            },
            {
                name: "Pantai Melawai",
                type: "destinasi",
                image: "../gambar/pantai melawai.png",
                link: "../destinasi/destinasi_kalimantan.php"
            },
            {
                name: "Pantai Base-G",
                type: "destinasi",
                image: "../gambar/Pantai Base-G.png",
                link: "../destinasi/destinasi_papua.php"
            },
            {
                name: "MG Setos Hotel",
                type: "hotel",
                image: "../gambar/hotel semarang.png",
                link: "../hotel/jawa.php"
            },
            {
                name: "Swiss-Belhotel Jayapura",
                type: "hotel",
                image: "../gambar/hotel papua.png",
                link: "../hotel/papua.php"
            },
            {
                name: "Hotel Mercure",
                type: "hotel",
                image: "../gambar/hotel mercure.png",
                link: "../hotel/kalimantan.php"
            },
            {
                name: "INFINITY8 BALI",
                type: "hotel",
                image: "../gambar/hotel bali (1).png",
                link: "../hotel/bali.php"
            },
        ];

        $('#search-input').on('input', function() {
            const query = $(this).val().toLowerCase();
            const results = destinations.filter(destination => destination.name.toLowerCase().includes(query));
            const resultsList = $('#results-list');
            resultsList.empty();

            if (query.length > 0) {
                if (results.length > 0) {
                    results.forEach(result => {
                        resultsList.append(`
                        <a href="${result.link}" class="bg-white rounded-lg shadow-md p-4">
                            <img src="${result.image}" alt="${result.name}" class="w-full h-32 object-cover rounded-md mb-2">
                            <h5 class="font-bold">${result.name}</h5>
                            <p class="text-sm text-gray-500">${result.type}</p>
                        </a>
                    `);
                    });
                    $('#search-results').removeClass('hidden');
                } else {
                    $('#search-results').addClass('hidden');
                }
            } else {
                $('#search-results').addClass('hidden');
            }
        });

        // Prevent form submission
        $('form').on('submit', function(e) {
            e.preventDefault();
        });

        // Language toggle functionality
        const translations = {
            en: {
                title: "Do you want to vacation today?",
                deskripsi: "Are you ready for adventure? Discover the best destinations, enjoy exclusive offers, and make memories that will last a lifetime!",
                Destinasi: "Destinations",
                destinations: "Vacation Destinations",
                hotels: "Hotels",
                exclusive: "Exclusive",
                offers: "Attractive Offers",
                home: "Home",
                hotel: "Hotel",
                contact: "Contact Us",
                selectRegion: "Select Region",
                java: "Java",
                bali: "Bali",
                sumatra: "Sumatra",
                kalimantan: "Kalimantan",
                papua: "Papua",
                searchPlaceholder: "Search Destinations and Hotels...",
                searchResults: "Search Results:",
                newDestinations: "New Destinations Available!",
                footerCompany: "Company",
                footerHelp: "Help Center",
                footerLanguage: "Language:",
                footerSocial: "Follow Us",
                footerCopyright: "© ATravels | Exploring the World",
            },
            id: {
                title: "Apakah anda ingin berlibur hari ini?",
                deskripsi: "Apakah Anda siap untuk berpetualang? Temukan destinasi terbaik, nikmati penawaran eksklusif, dan buat kenangan yang akan bertahan seumur hidup !!!",
                Destinasi: "Destinasi",
                destinations: "Destinasi Liburan",
                hotels: "Hotel",
                exclusive: "Eksklusif",
                offers: "Penawaran Menarik",
                home: "Beranda",
                hotel: "Hotel",
                contact: "Tantang Kami",
                selectRegion: "Pilih Daerah",
                java: "Jawa",
                bali: "Bali",
                sumatra: "Sumatra",
                kalimantan: "Kalimantan",
                papua: "Papua",
                searchPlaceholder: "Cari Destinasi Dan Hotel...",
                searchResults: "Hasil Pencarian:",
                newDestinations: "Ada Destinasi Terbaru Nih !!",
                footerCompany: "Perusahaan",
                footerHelp: "Pusat Bantuan",
                footerLanguage: "Bahasa:",
                footerCopyright: "© ATravels | Mengelilingi Dunia",
            }
        };

        $(document).ready(function() {
            const savedLang = localStorage.getItem('language') || 'id';
            updateLanguage(savedLang);

            $('#language-toggle').click(function(e) {
                e.preventDefault();
                $('#language-options').toggleClass('hidden');
            });

            $('.language-option').click(function() {
                const selectedLang = $(this).data('lang');
                updateLanguage(selectedLang);
                localStorage.setItem('language', selectedLang);
                $('#language-options').addClass('hidden');
            });

            function updateLanguage(lang) {
                $('h1').text(translations[lang].title);
                $('p').text(translations[lang].subtitle);
                $('#descripsi').text(translations[lang].deskripsi);
                $('#destinasi h2').text(translations[lang].destinations);
                $('#hotels-en').text(translations[lang].hotels);
                $('#exxlusive').text(translations[lang].exclusive);
                $('#ofers').text(translations[lang].offers);
                $('#nav-home').text(translations[lang].home);
                $('#hotels-nav').text(translations[lang].hotels);
                $('#destinasi-nav').text(translations[lang].Destinasi);
                $('#nav-contact').text(translations[lang].contact);
                $('#select-region-title').text(translations[lang].selectRegion);
                $('#select-region-title2').text(translations[lang].selectRegion);
                $('#search-input').attr('placeholder', translations[lang].searchPlaceholder);
                $('#java-link2').text(translations[lang].java);
                $('#bali-link2').text(translations[lang].bali);
                $('#sumatra-link2').text(translations[lang].sumatra);
                $('#kalimantan-link2').text(translations[lang].kalimantan);
                $('#papua-link2').text(translations[lang].papua);
                $('#results').text(translations[lang].searchResults);
                $('#New').text(translations[lang].newDestinations);
                $('#footer-company').text(translations[lang].footerCompany);
                $('#footer-help').text(translations[lang].footerHelp);
                $('#footer-language').text(translations[lang].footerLanguage);
                $('#copyright').text(translations[lang].footerCopyright);
            }
        });
    });
</script>

</html>