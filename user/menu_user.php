<?php
require "../koneksi.php";
$nim = $_GET['nim'];
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_mhsiswa WHERE nim = '$nim'");
$data = mysqli_fetch_array($ambildata);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MENU</title>
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
      href="user.php?nim=<?php echo $data['nim'] ?>">
      <i class="fa-solid fa-user"></i>
      <h6 class="text-sm font-medium">Profile</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="menu_user.php?nim=<?php echo $data['nim'] ?>">
      <i class="fa-solid fa-bars"></i>
      <h6 class="text-sm font-medium">Menu</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="artikel.php?nim=<?php echo $data['nim'] ?>">
      <i class="fa-solid fa-book"></i>
      <h6 class="text-sm font-medium">Artikel</h6>
    </a>
  </nav>
  <div class="mt-3 mb-7">
    <div class="px-5 grid gap-y-2 w-full">
      <a class="hover:shadow-lg shadow-sm text-lg font-bold text-slate-700 hover:text-gray-50 w-full px-[20px] py-[20px] flex justify-between items-center h-[100%] rounded gap-[12px] bg-slate-100 hover:bg-blue-500 active:bg-slate-500"
        href="tambah.php">
        Tambah calon Mahasiswa Baru
        <i class="fa-regular font-bold fa-add text-xl"></i>
      </a>
      <a class="hover:shadow-lg shadow-sm text-lg font-bold text-slate-700 hover:text-gray-50 w-full px-[20px] py-[20px] flex justify-between items-center h-[100%] rounded gap-[12px] bg-slate-100 hover:bg-blue-500 active:bg-slate-500"
        href="tambah.php">
        Calon Mahasiswa Baru
        <i class="fa-regular font-bold fa-user text-xl"></i>
      </a>
      <a class="hover:shadow-lg shadow-sm text-lg font-bold text-slate-700 hover:text-gray-50 w-full px-[20px] py-[20px] flex justify-between items-center h-[100%] rounded gap-[12px] bg-slate-100 hover:bg-blue-500 active:bg-slate-500"
        href="./artikel/add_artikel.php">
        Tambah Artikel
        <i class="fa-regular font-bold fa-plus text-xl"></i>
      </a>
      <a class="hover:shadow-lg shadow-sm text-lg font-bold text-slate-700 hover:text-gray-50 w-full px-[20px] py-[20px] flex justify-between items-center h-[100%] rounded gap-[12px] bg-slate-100 hover:bg-blue-500 active:bg-slate-500"
        href="./artikel/tabel_artikel.php">
        Tabel Artikel
        <i class="fa-solid font-bold fa-book-open text-xl"></i>
      </a>
    </div>
  </div>
</body>

</html>