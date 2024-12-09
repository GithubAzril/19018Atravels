<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-white dark:bg-white bg-[url('../gambar/bg.png')] dark:bg-[url('../gambar/bg.png')]">
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900 w-full">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between ml-16 py-2 pr-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="../gambar/logo.png" class="h-16 w-22" alt="Logo" />
                </a>
                <div class="flex md:order-2 space-x-3">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="flex space-x-4 items-center ">
                        <a href="#" class="items-center mt-1 text-white text-xl"><i class="fa-solid fa-cart-shopping"></i></a>
                        <div class="language-container" style="position: relative;">
                            <a href="#" class="items-center mt-1 text-white text-xl" id="language-toggle">
                                <i class="fa-solid fa-globe"></i>
                            </a>
                            <div id="language-options" class="hidden">
                                <div class="bg-white text-black text-start rounded shadow">
                                    <a href="#" class="language-option block flex  rounded-t border-black py-1 px-4" data-lang="id">Indonesia</a>
                                    <a href="#" class="language-option block rounded-b py-1  px-4" data-lang="en">Inggris</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="../gambar/background.png" alt="User dropdown">
                    <div id="userDropdown" class="z-10 mt-6 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>Bonnie Green</div>
                            <div class="font-medium truncate">name@flowbite.com</div>
                        </div>
                        <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                        </div>
                    </div>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                    </div>
                    <div class="flex flex-col p-4 md:p-0 mt-2 font-semibold md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-3">
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md: md:p-0 md:dark:" aria-current="page">Beranda</a>
                        <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Hotel <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="mega-menu-dropdown" class="hidden absolute z-10 bg-white rounded-lg shadow-lg w-48 mt-12">
                            <div class="p-4">
                                <h4 class="font-bold mb-2">Pilih Daerah</h4>
                                <ul class="flex flex-col">
                                    <li><a href="#" class="block py-1 hover:bg-gray-100">Jawa</a></li>
                                    <li><a href="#" class="block py-1 hover:bg-gray-100">Bali</a></li>
                                    <li><a href="#" class="block py-1 hover:bg-gray-100">Sumatra</a></li>
                                    <li><a href="#" class="block py-1 hover:bg-gray-100">Kalimantan</a></li>
                                    <li><a href="#" class="block py-1 hover:bg-gray-100">Papua</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="relative inline-block"> <!-- Menambahkan div dengan class relative -->
                            <button id="rental-menu-dropdown-button" data-dropdown-toggle="rental-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Rental <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>

                            <div id="rental-menu-dropdown" class="hidden absolute z-10 bg-white rounded-lg shadow-lg w-48 mt-1"> <!-- Menggunakan mt-1 untuk jarak kecil -->
                                <div class="p-4">
                                    <h4 class="font-bold mb-2">Pilih Tipe Rental</h4>
                                    <ul class="flex flex-col">
                                        <li><a href="#" class="block py-1 hover:bg-gray-100">Mobil</a></li>
                                        <li><a href="#" class="block py-1 hover:bg-gray-100">Motor</a></li>
                                        <li><a href="#" class="block py-1 hover:bg-gray-100">Sewa Sepeda</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md: md:p-0 md:dark:" aria-current="page">Tantang Kami</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="ticket p-6 max-w-md w-full ">
            <div class="ticket-header">
                <img src="../gambar/logo.png" alt="Logo Web" class="logo"> <!-- Ganti URL_LOGO_ANDA dengan URL logo Anda -->
                <h2 class="font-bold">Konfirmasi Pemesanan Anda</h2>
                <p class="text-gray-600">Silakan simpan dan tunjukan kepada kasir saat anda berkunjung.</p>
                <p class="text-sm text-gray-500">Terima kasih telah memesan dengan kami!</p>
            </div>
            <div class="qr-container">
                <div id="qrCode" class="flex items-center justify-center"></div>
            </div>
        </div>
    </div>


    <footer class="bg-white dark:bg-gray-900 mt-10">
        <div class="mx-auto w-full max-w-screen">
            <div class="grid grid-cols-2  gap-12 px-12 py-6 lg:py-8 md:grid-cols-4">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Perusahaan</h2>
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
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Pusat Bantuan</h2>
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
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Bahasa :</h2>
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
                <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© <a href="">ATravels</a> | Mengelilingi Dunia
                </span>
            </div>
        </div>
    </footer>

    <script>
        const qrData = localStorage.getItem('qrData');
        if (qrData) {
            $('#qrCode').qrcode({
                text: qrData,
                width: 100,
                height: 100
            });
        } else {
            $('#qrCode').html('<p>Data QR Code tidak ditemukan.</p>');
        }
    </script>
</body>

</html>