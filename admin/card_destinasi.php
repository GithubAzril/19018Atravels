<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../gambar/logo.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.rawgit.com/lindell/JsBarcode/master/dist/JsBarcode.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-blue-200 dark:bg-blue-800 dark:border-blue-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="#" class="flex ms-2 md:me-24">
                        <img src="../gambar/logo.png" class="h-8 me-3 rounded-l-full" alt="FlowBite Logo" />
                        <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">ATravels (ADMIN)</span>
                    </a>
                </div>
            </div>
    </nav>

    <main id="post" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-blue-200 sm:translate-x-0 dark:bg-blue-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-blue-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="?page=dashboard" class="flex items-center p-2 text--900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-house"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/data.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-chart-column"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Data Pembelian</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/data-login.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-regular fa-user"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">User login</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/admin-pengurus.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-hotel"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Booking Hotel</span>
                    </a>
                </li>
                <li>
                    <a href="../admin/berita.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fa-solid fa-ticket"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Tiket Destiansi</span>
                    </a>
                </li>
                <li>
                    <a href="../koneksi/login.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
                            <path d="M10 17l-5-5 5-5v3h9v4H10v3z" />
                            <path d="M20 3h-6V1h6a2 2 0 0 1 2 2v18a2 2 0 0 1-2 2h-6v-2h6V3z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Keluar</span>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <div class="bg-[cyan] sm:ml-64">
        <div class="container mx-auto text-center flex items-center h-screen">
            <div class="w-full p-12 welcome-text">
                <h1 class="text-black text-5xl font-bold mb-4">Hallo Selamat Datang</h1>
                <p class="text-black text-lg font-semibold">Di Laman Dashboard Admin</p>
            </div>
        </div>
    </div>



</body>

</html>