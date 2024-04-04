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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script>
    setTimeout(function () {
      location.reload();
    }, 800); // Reload setiap 5 detik (5000 milidetik)
  </script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300 mb-24">
  <nav class="fixed w-[50%] flex flex-row justify-center items-center gap-2  bottom-0 w-full px-2 py-2 bg-gray-50">
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-slate-400 gap-y-[2px]"
      href="dashboard.php">
      <i class="fa-solid fa-house"></i>
      <h6 class="text-sm font-medium">dashboard</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="menu.php">
      <i class="fa-solid fa-bars fa-beat-fade"></i>
      <h6 class="text-sm font-medium">Menu</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="daftarfakultas.php">
      <i class="fa-solid fa-house"></i>
      <h6 class="text-sm text-center font-medium">Daftar Mahasiswa</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="dashboard.php">
      <i class="fa-solid fa-book"></i>
      <h6 class="text-sm font-medium">Artikel</h6>
    </a>

  </nav>

  <div class=" mt-3 mb-7">
    <div class="px-5 grid gap-y-2 w-full">
      <a class="hover:shadow-lg shadow-sm  text-slate-700 hover:text-gray-50 w-full px-[20px] py-[20px] flex justify-center items-center h-[100%] rounded  gap-[12px] bg-slate-100 hover:bg-blue-500 active:bg-slate-500 "
        href="tambah.php">
        <i class="fa-regular fa-user text-[20px] font-medium"></i>
        <h6 class="text-normal font-bold ">
          Tambah calon Mahasiswa Baru
        </h6>
      </a>
      <a class="hover:shadow-lg shadow-sm  text-slate-700 hover:text-gray-50 w-full px-[20px] py-[20px] flex justify-center items-center h-[100%] rounded  gap-[12px] bg-slate-100 hover:bg-blue-500 active:bg-slate-500 "
        href="tambah.php">
        <i class="fa-solid fa-plus fa-bounce hover:text-[20px]"></i>
        <h6 class="text-normal font-bold ">
          Buat Artikel Baru
        </h6>
      </a>
    </div>
  </div>
</body>

</html>