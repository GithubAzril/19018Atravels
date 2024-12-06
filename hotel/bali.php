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
    <script src="https://cdn.rawgit.com/lindell/JsBarcode/master/dist/JsBarcode.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
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
            <div class="flex space-x-4 items-center">
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
                <a href="../php/home.php" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 md:dark:" aria-current="page">Beranda</a>
                <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Hotel <svg class ="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="mega-menu-dropdown" class="hidden absolute z-10 bg-white rounded-lg shadow-lg w-48 mt-12">
                    <div class="p-4">
                        <h4 class="font-bold mb-2">Pilih Daerah</h4>
                        <ul class="flex flex-col">
                            <li><a href="../hotel/jawa.php" class="block py-1 hover:bg-gray-100">Jawa</a></li>
                            <li><a href="../hotel/bali.php" class="block py-1 hover:bg-gray-100">Bali</a></li>
                            <li><a href="../hotel/sumatra.php" class="block py-1 hover:bg-gray-100">Sumatra</a></li>
                            <li><a href="../hotel/kalimantan.php" class="block py-1 hover:bg-gray-100">Kalimantan</a></li>
                            <li><a href="../hotel/papua.php" class="block py-1 hover:bg-gray-100">Papua</a></li>
                        </ul>
                    </div>
                </div>
                <div class="relative inline-block">
                    <button id="wisata-menu-dropdown-button" data-dropdown-toggle="wisata-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Destinasi<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="wisata-menu-dropdown" class="hidden absolute bg-white rounded-lg shadow-lg w-48 mt-6">
                        <div class="p-4">
                            <h4 class="font-bold mb-2">Pilih Daerah</h4>
                            <ul class="flex flex-col">
                                <li><a href="../destinasi/destinasi_jawa.php" class="block py-1 hover:bg-gray-100">Jawa</a></li>
                                <li><a href="../destinasi/destinasi_bali.php" class="block py-1 hover:bg-gray-100">Bali</a></li>
                                <li><a href="../destinasi/destinasi_sumatra.php" class="block py-1 hover:bg-gray-100">Sumatra</a></li>
                                <li><a href="../destinasi/destinasi_kalimantan.php" class="block py-1 hover:bg-gray-100">Kalimantan</a></li>
                                <li><a href="../destinasi/destinasi_papua.php" class="block py-1 hover:bg-gray-100">Papua</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#footer" id="about-us-link" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:p-0 md:dark:" aria-current="page">Tantang Kami</a>
            </div>
        </div>
    </div>
</nav>
    </header>
    <section class=" bg-[url('../gambar/hotel_bali.png')] dark:bg-[url('../gambar/hotel_bali.png')] bg-cover pt-20 pb-16">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 relative pb-12">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Apakah anda ingin berlibur hari ini?</h1>
            <p class="mb-8 text-lg font-normal text-white font-semibold lg:text-xl sm:px-16 lg:px-48 dark:text-white">"Apakah Anda siap untuk berpetualang? Temukan destinasi terbaik, nikmati penawaran eksklusif, dan buat kenangan yang akan bertahan seumur hidup!"</p>
            <div class="absolute start-2 top-full mr-2 transform-translate-x-1/2 bg-white p-4 flex flex-wrap shadow-lg sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 rounded-xl  sm:flex">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-map-marker-alt text-orange-500">
                    </i>
                    <span class="text-sm sm:text-text-base">
                    Aston Denpasar Hotel & Convention Center
                    </span>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-calendar-alt text-orange-500">
                    </i>
                    <span class="text-sm sm:text-text-base">
                        12 Dec 24 - 25 Dec 30
                    </span>
                </div>
            </div>
    </section>

    <section class="mt-20">
        <div class="container mx-auto p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                    <img src="../gambar/hotel_bali.png" alt="Ski Dubai" class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow">
                        <h2 class="text-xl font-semibold">Aston Denpasar Hotel & Convention Center
                        </h2>
                        <div class="flex justify-between items-center my-2">
                            <span class="text-lg font-bold text-blue-600">Rp 1.500.000</span>
                            <span class="text-gray-600">★ 4.6 (1,422)</span>
                        </div>
                        <p class="text-gray-500 my-2">Pesan hotel Anda sekarang untuk pengalaman terbaik!</p>
                    </div>
                    <div class="p-4 text-center">
                        <a href="#" class="pesan-button inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition-colors" data-hotel="Aston Denpasar Hotel & Convention Center" data-normal-price="1500000" data-vip-price="3000000">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                    <img src="../gambar/bali.png" alt="Burj Khalifa" class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow">
                        <h2 class="text-xl font-semibold">favehotel - Kartika Plaza Kuta</h2>
                        <div class="flex justify-between items-center my-2">
                            <span class="text-lg font-bold text-blue-600">Rp 1.000.000</span>
                            <span class="text-gray-600">★ 4.5 (7,886)</span>
                        </div>
                        <p class="text-gray-500 my-2">Pesan hotel Anda sekarang untuk pengalaman terbaik!</p>
                    </div>
                    <div class="p-4 text-center">
                        <a href="#" class="pesan-button inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition-colors" data-hotel="favehotel - Kartika Plaza Kuta" data-normal-price="1000000" data-vip-price="2000000">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden flex flex-col">
                    <img src="../gambar/bali1.png" alt="Atlantis Aquaventure" class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow">
                        <h2 class="text-xl font-semibold">Hotel ZIA Bali - Kuta</h2>
                        <div class="flex justify-between items-center my-2">
                            <span class="text-lg font-bold text-blue-600">Rp 1.200.000</span>
                            <span class="text-gray-600">★ 4.4 (1,949)</span>
                        </div>
                        <p class="text-gray-500 my-2">Pesan hotel Anda sekarang untuk pengalaman terbaik!</p>
                    </div>
                    <div class="p-4 text-center">
                        <a href="#" class="pesan-button inline-block bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition-colors" data-hotel="Hotel ZIA Bali - Kuta" data-normal-price="1200000" data-vip-price="2400000">Pesan Sekarang</a>
                    </div>
                </div>
    </section>
    <div id="purchaseModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden pt-0 md:pt-20">
        <div class="bg-white rounded-lg shadow-lg p-6 w-11/12 md:w-1/3">
            <a href="#" id="backButton" class="flex items-center mb-4">
                <i class="fa-solid fa-arrow-left text-gray-900 mr-2"></i> 
                <span class="text-gray-900">Kembali</span>
            </a>
            <div class="text-center mt-0 md:mt-4">
                <img src="../gambar/logo.png" alt="Logo" class="h-12 md:16 mx-auto">
            </div>
            <h2 class="text-xl md:text-2xl font-bold mb-4 text-center">Form Pembelian</h2>
            <form id="purchaseForm" class="space-y-2">
                <input type="text" id="name" name="name" required class="w-full p-1 md:p-2 border border-gray-300 rounded-lg" placeholder="Nama Lengkap">
                <input type="email" id="email" name="email" required class="w-full p-1 md:p-2 border border-gray-300 rounded-lg" placeholder="Email">
                <div class="flex space-x-1 md:space-x-2">
                    <input type="date" id="check-in" name="check_in" required class="flex-1 pt-2 pb-2 text-center md:p-2 md:text-start border border-gray-300 rounded-lg">
                    <input type="date" id="check-out" name="check_out" required class="flex-1 pt-2 pb-2 text-center md:p-2 md:text-start border border-gray-300 rounded-lg">
                </div>
                <div class="flex space-x-1 md:space-x-2 ">
                    <input type="number" id="guests" name="guests" required class="flex-1 inset-x-0 pt-2 pb-2  text-center md:text-start md:p-2 border border-gray-300 rounded-lg" placeholder="Jumlah Tamu"  >
                    <select id="payment-method" name="payment_method" required class="flex-1 text-sm font-light md:text-md md:font-semibold pt-2 pb-2 text-center md:text-start md:p-2 border border-gray-300 rounded-lg">
                        <option value="" disabled selected>Pilih Metode</option>
                        <option value="paypal">Paypal</option>
                        <option value="bank_transfer">Transfer Bank</option>
                    </select>
                </div>
                <select id="room-type" name="room_type" required class="w-full p-2 border border-gray-300 rounded-lg">
                    <option value="" disabled selected>Tipe Kamar</option>
                </select>
                <input type="text" id="total-cost" name="total_cost" readonly class="w-full p-2 border border-gray-300 rounded-lg" value="Rp 0">
                <button type="button" id="submitBtn" class="w-full bg-blue-500 text-white p-2 rounded-lg">Pesan Sekarang</button>
            </form>
            <div id="qrCodeContainer" class="hidden mt-4 flex flex-col items-center justify-center text-center">
                <h3 class="text-xl font-bold mb-2">QR Code Pembelian Anda</h3>
                <div id="qrCode" class="mb-4 "></div>
                <button id="scanButton" class="bg-green-500 text-white p-2 rounded-lg">Saya sudah scan</button>
            </div>
        </div>
    </div>
    <footer id="footer" class="bg-white dark:bg-gray-900 mt-10">
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
</body>
<script>
    $(document).ready(function() {
        // Event listener untuk tautan "Tentang Kami"
        $('#about-us-link').on('click', function(e) {
            e.preventDefault(); // Mencegah perilaku default dari tautan
            $('html, body').animate({
                scrollTop: $('#footer').offset().top // Mengatur scroll ke posisi footer
            }, 1000); 
        });
    });
</script>
<script>
        $(document).ready(function() {
        $('#backButton').on('click', function(e) {
            e.preventDefault();
            $('#purchaseModal').addClass('hidden'); 
        });
    });
</script>
<script>
$(document).ready(function() {

    // Menangani klik pada hamburger menu untuk menampilkan menu
    $('button[data-collapse-toggle="navbar-search"]').on('click', function() {
        $('#navbar-search').toggleClass('hidden');
    });


    // Menyembunyikan navbar search jika pengguna mengklik di luar navbar
    $(document).on('click', function(event) {
        if (!$(event.target).closest('button[data-collapse-toggle="navbar-search"]').length && !$(event.target).closest('#navbar-search').length) {
            $('#navbar-search').addClass('hidden');
        }
    });
});
</script>
<script>
    $(document).ready(function() {
        // Menyembunyikan semua section kecuali yang pertama
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
    $(document).ready(function() {
        $('#wisata-menu-dropdown-button').on('click', function(e) {
            e.preventDefault(); // Mencegah perilaku default dari tautan
            $('#wisata-menu-dropdown').toggleClass('hidden'); // Tampilkan atau sembunyikan rental-menu
        });

        // Menyembunyikan rental-menu jika pengguna mengklik di luar rental-menu
        $(document).on('click', function(event) {
            if (!$(event.target).closest('#wisata-menu-dropdown-button').length && !$(event.target).closest('#rental-menu-dropdown').length) {
                $('#wisata-menu-dropdown').addClass('hidden'); // Sembunyikan rental-menu
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const languageToggle = document.getElementById('language-toggle');
        const languageOptions = document.getElementById('language-options');

        // Menampilkan atau menyembunyikan opsi bahasa saat tautan diklik
        languageToggle.addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah perilaku default dari tautan
            languageOptions.classList.toggle('hidden'); // Toggle kelas hidden
        });

        // Menangani klik pada opsi bahasa
        const options = document.querySelectorAll('.language-option');
        options.forEach(option => {
            option.addEventListener('click', function() {
                const selectedLang = this.getAttribute('data-lang');
                console.log('Bahasa yang dipilih:', selectedLang); // Ganti dengan logika sesuai kebutuhan
                languageOptions.classList.add('hidden'); // Sembunyikan opsi setelah memilih
            });
        });

        // Menyembunyikan opsi jika klik di luar
        document.addEventListener('click', function(event) {
            if (!languageToggle.contains(event.target) && !languageOptions.contains(event.target)) {
                languageOptions.classList.add('hidden');
            }
        });
    });;
</script>
<script>
    const submitBtn = document.getElementById('submitBtn');
    let isDown = false;
    let startX;
    let scrollLeft;

    submitBtn.addEventListener('mousedown', (e) => {
        isDown = true;
        cardContainer.classList.add('active');
        startX = e.pageX - submitBtn.offsetLeft;
        scrollLeft = submitBtn.scrollLeft;
    });

    submitBtn.addEventListener('mouseleave', () => {
        isDown = false;
        submitBtn.classList.remove('active');
    });

    submitBtn.addEventListener('mouseup', () => {
        isDown = false;
        submitBtn.classList.remove('active');
    });

    submitBtn.addEventListener('mousemove', (e) => {
        if (!isDown) return; // stop the fn from running
        e.preventDefault();
        const x = e.pageX - submitBtn.offsetLeft;
        const walk = (x - startX) * 2;
        submitBtn.scrollLeft = scrollLeft - walk;
    });
</script>
<script>
    $(document).ready(function() {
        $('#mega-menu-dropdown-button').on('click', function(e) {
            e.preventDefault();
            $('#mega-menu-dropdown').toggleClass('hidden');
        });


        $(document).on('click', function(event) {
            if (!$(event.target).closest('#mega-menu-dropdown-button').length && !$(event.target).closest('#mega-menu-dropdown').length) {
                $('#mega-menu-dropdown').addClass('hidden');
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        let totalCost = 0; // Variabel untuk menyimpan total biaya

        // Event listener untuk tombol pesan
        $('.pesan-button').on('click', function(e) {
            e.preventDefault();

            var hotelName = $(this).data('hotel');
            var normalPrice = parseInt($(this).data('normal-price'));
            var vipPrice = parseInt($(this).data('vip-price'));

            // Menampilkan modal pemesanan
            $('#purchaseModal').removeClass('hidden');

            // Mengisi dropdown tipe kamar
            $('#room-type').find('option').remove(); // Clear previous options
            $('#room-type').append('<option value="" disabled selected>Pilih Tipe Kamar</option>');
            $('#room-type').append('<option value="normal" data-price="' + normalPrice + '">Normal (Rp ' + normalPrice.toLocaleString() + ')</option>');
            $('#room-type').append('<option value="vip" data-price="' + vipPrice + '">VIP (Rp ' + vipPrice.toLocaleString() + ')</option>');

            // Menghitung total biaya ketika jumlah tamu atau tipe kamar berubah
            $('#room-type, #guests').on('change', function() {
                var roomType = $('#room-type').val();
                var guests = parseInt($('#guests').val()) || 0;
                var roomPrice = roomType ? $('#room-type option:selected').data('price') : 0;

                // Hitung total biaya
                totalCost = guests * roomPrice;
                $('#total-cost').val(`Rp ${totalCost.toLocaleString()}`); // Format dengan pemisah ribu
            });

            // Event listener untuk tombol submit
            $('#submitBtn').off('click').on('click', function() {
                var name = $('#name').val();
                var email = $('#email').val();
                var checkIn = $('#check-in').val();
                var checkOut = $('#check-out').val();
                var guests = $('#guests').val();
                var paymentMethod = $('#payment-method').val();
                var roomType = $('#room-type').val();

                // Kirim data ke server
                $.ajax({
                    url: '../data/save_booking.php',
                    type: 'POST',
                    data: {
                        name: name,
                        email: email,
                        check_in: checkIn,
                        check_out: checkOut,
                        guests: guests,
                        payment_method: paymentMethod,
                        room_type: roomType,
                        hotel_name: hotelName,
                        total_cost: $('#total-cost').val()
                    },
                    success: function(response) {
                        alert('Data berhasil disimpan: ' + response);
                        totalCost = 0; // Reset total biaya setelah pemesanan
                        $('# total-cost').val('Rp 0'); // Reset tampilan total biaya
                    },
                    error: function(xhr, status, error) {
                        alert('Terjadi kesalahan: ' + error);
                    }
                });
            });
        });
    });
</script>
<script>
    document.getElementById('submitBtn').addEventListener('click', function() {
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var checkIn = document.getElementById('check-in').value;
        var checkOut = document.getElementById('check-out').value;
        var guests = document.getElementById('guests').value;
        var paymentMethod = document.getElementById('payment-method').value;
        var roomType = document.getElementById('room-type').value;

        var qrData = `Nama: ${name}, Email: ${email}, Check-In: ${checkIn}, Check-Out: ${checkOut}, Jumlah Tamu: ${guests}, Metode Pembayaran: ${paymentMethod}, Tipe Kamar: ${roomType}`;

        localStorage.setItem('qrData', qrData);

        document.getElementById('purchaseForm').classList.add('hidden');
        $('#qrCode').empty();
        $('#qrCode').qrcode(qrData);
        document.getElementById('qrCodeContainer').classList.remove('hidden');
        document.getElementById('scanButton').classList.remove('hidden');
    });

    document.getElementById('scanButton').addEventListener('click', function() {
        alert('Selamat! Anda telah memesan tiket.');
        window.location.href = '../php/halaman-barcode.php';
    });
</script>
<script>
    $(document).ready(function() {
        const prices = {
            normal: 500000,
            vip: 1000000
        };

        $('#guests, #room-type').on('change', function() {
            const guests = parseInt($('#guests').val()) || 0;
            const roomType = $('#room-type').val();
            const pricePerNight = prices[roomType] || 0;

            const totalCost = guests * pricePerNight;
            $('#total-cost').val(`Rp ${totalCost.toLocaleString()}`);
        });

        $('#submitBtn').on('click', function() {
            const totalCost = $('#total-cost').val();
            $('#qrCode').attr('src', `https://api.qrserver.com/v1/create-qr-code/?data=${totalCost}&size=200x200`);
            $('#qrCodeContainer').removeClass('hidden');
        });
    });
</script>

</html>