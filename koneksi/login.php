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
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>
    <div class="flex items-center justify-center min-h-screen">
        <div class="rounded-lg shadow-lg flex overflow-hidden max-w-4xl w-full">
            <div class="bg-cover bg-center p-10 flex-1 flex flex-col items-center justify-center" style="background-image: url('../gambar/ilustrasi destinasi (1).png'); object-fit:cover; ">
            </div>
            <div class="bg-gray-800 text-white p-10 flex-1 flex flex-col justify-center">
                <div class="mb-6 text-center">
                    <img alt="Logo" class="mb-4 rounded-full" height="50" src="../gambar/logo.png" width="100" />
                    <h2 class="text-2xl font-bold">Selamat Datang</h2>
                    <p class="text-gray-400 font-semibold">Login Terlebih Dahulu</p>
                </div>
                <form method="POST">
                    <div class="mb-4">
                        <label class="block text-white text-sm font-medium text-gray-400" for="username">Username</label>
                        <input id="username" name="username" class="mt-1 block w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-gray-500" type="text" placeholder="Username" required />
                    </div>
                    <div class="mb-4">
                        <label class="block text-white text-sm font-medium text-gray-400" for="password">Password</label>
                        <input name="password" class="mt-1 block w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-gray-500" id="password" type="password" placeholder="Password" required />
                    </div>
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center  text-sm text-gray-400">
                            <input type="checkbox" id="show-password" class="form-checkbox bg-gray-700 border-gray-600 text-gray-500" onclick="togglePasswordVisibility()" />
                            <span class="ml-2">Tampilkan Password</span>
                        </label>
                    </div>
                    <button class="w-full py-2 bg-white text-gray-800 rounded-md font-semibold hover:bg-gray-200" type="submit">Log in</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>