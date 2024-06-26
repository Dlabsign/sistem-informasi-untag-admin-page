<?php
require ('koneksi.php')
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ADMIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style3.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300 mb-24">
  <nav
    class="fixed w-[50%] shadow-lg flex flex-row justify-center items-center gap-2 bottom-0 w-full px-2 py-2 bg-gray-50">
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-slate-400 gap-y-[2px]"
      href="dashboard.php">
      <i class="fa-solid fa-house"></i>
      <h6 class="text-sm font-medium">dashboard</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="menu.php">
      <i class="fa-solid fa-bars"></i>
      <h6 class="text-sm font-medium">Menu</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="daftarfakultas.php">
      <i class="fa-solid fa-house"></i>
      <h6 class="text-sm text-center font-medium">Daftar Mahasiswa</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
    href="./artikel/artikelpage.php">
      <i class="fa-solid fa-book"></i>
      <h6 class="text-sm font-medium">Artikel</h6>
    </a>
  </nav>

  <div class="mt-3 mb-7 flex flex-col gap-y-4">
    <!-- ================= INFORMATIKA ================= -->

    <div class="px-5 grid gap-y-2 w-full">
      <a class="hover:shadow-xl shadow-sm text-slate-700 hover:text-slate-50 w-full py-3 px-4 flex justify-start items-center h-[100%] rounded-xl gap-[20px] bg-slate-100 hover:bg-blue-600 active:bg-slate-500"
        href="./daftarfakultas/teknik.php">
        <div class="p-3 bg-blue-600 rounded">
          <img src="assets/image/logo.png" alt="" width="50px" />
        </div>

        <!-- ================= INFORMATIKA ================= -->
        <div class="flex flex-col justify-start items-start w-full">
          <h6 class="text-normal text-[24px] font-bold">Fakultas Teknik</h6>
          <div class="w-full flex justify-between  border-t border-gray-400">
            <h1 class="text-base font-medium">Jumlah Mahasiswa</h1>
            <h1 class="text-base font-bold">
              <?php echo $teknik ?>
            </h1>
          </div>
          <div class="w-full flex justify-between border-t border-gray-400">
            <h1 class="text-base font-medium">Jumlah artikel</h1>
            <h1 class="text-base font-bold">50</h1>
          </div>
          <div class="w-full flex justify-between border-t border-gray-400">
            <h1 class="text-base font-medium">Rata Ipk</h1>
            <h1 class="text-base font-bold">50</h1>
          </div>
        </div>


      </a>
    </div>

    <!-- ================= HUKUM ================= -->
    <div class="px-5 grid gap-y-2 w-full">
      <a class="hover:shadow-xl shadow-sm text-slate-700 hover:text-slate-50 w-full py-3 px-4 flex justify-start items-center h-[100%] rounded-xl gap-[20px] bg-slate-100 hover:bg-red-600 active:bg-red-500"
        href="./daftarfakultas/hukum.php">
        <div class="p-3 bg-red-600 rounded">
          <img src="assets/image/logo.png" alt="" width="50px" />
        </div>

        <div class="flex flex-col justify-start items-start w-full">
          <h6 class="text-normal text-[24px] font-bold">Fakultas Hukum</h6>
          <div class="w-full flex justify-between  border-t border-gray-400">
            <h1 class="text-base font-medium">Jumlah Mahasiswa</h1>
            <h1 class="text-base font-bold">
              <?php echo $hukum ?>
            </h1>
          </div>
          <div class="w-full flex justify-between border-t border-gray-400">
            <h1 class="text-base font-medium">Jumlah artikel</h1>
            <h1 class="text-base font-bold">50</h1>
          </div>
          <div class="w-full flex justify-between border-t border-gray-400">
            <h1 class="text-base font-medium">Rata Ipk</h1>
            <h1 class="text-base font-bold">50</h1>
          </div>
        </div>


      </a>
    </div>

    <!-- ================= Budaya ================= -->
    <div class="px-5 grid gap-y-2 w-full">
      <a class="hover:shadow-xl shadow-sm text-slate-700 hover:text-slate-50 w-full py-3 px-4 flex justify-start items-center h-[100%] rounded-xl gap-[20px] bg-slate-100 hover:bg-slate-600 active:bg-red-500"
        href="./daftarfakultas/budaya.php">
        <div class="p-3 bg-slate-600 rounded">
          <img src="assets/image/logo.png" alt="" width="50px" />
        </div>

        <div class="flex flex-col justify-start items-start w-full">
          <h6 class="text-normal text-[24px] font-bold">Fakultas Budaya</h6>
          <div class="w-full flex justify-between  border-t border-gray-400">
            <h1 class="text-base font-medium">Jumlah Mahasiswa</h1>
            <h1 class="text-base font-bold">
              <?php echo $budaya ?>
            </h1>
          </div>
          <div class="w-full flex justify-between border-t border-gray-400">
            <h1 class="text-base font-medium">Jumlah artikel</h1>
            <h1 class="text-base font-bold">50</h1>
          </div>
          <div class="w-full flex justify-between border-t border-gray-400">
            <h1 class="text-base font-medium">Rata Ipk</h1>
            <h1 class="text-base font-bold">50</h1>
          </div>
        </div>
      </a>
    </div>
  </div>
</body>

</html>