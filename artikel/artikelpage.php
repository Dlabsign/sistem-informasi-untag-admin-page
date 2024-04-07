<?php
require "../koneksi.php";

$artikel = "SELECT * FROM tbl_artikel";
$tampil_artikel = mysqli_query($conn, $artikel);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Artikel Untag Surabaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style3.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-400 ">
  <nav
    class="fixed w-[50%] shadow-lg flex flex-row justify-center items-center gap-2 bottom-0 w-full px-2 py-2 bg-gray-50">
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-slate-400 gap-y-[2px]"
      href="../dashboard.php">
      <i class="fa-solid fa-house"></i>
      <h6 class="text-sm font-medium">dashboard</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="../menu.php">
      <i class="fa-solid fa-bars"></i>
      <h6 class="text-sm font-medium">Menu</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="../daftarfakultas.php">
      <i class="fa-solid fa-house"></i>
      <h6 class="text-sm text-center font-medium">Daftar Mahasiswa</h6>
    </a>
    <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
      href="./artikelpage.php">
      <i class="fa-solid fa-book"></i>
      <h6 class="text-sm font-medium">Artikel</h6>
    </a>
  </nav>

  <div class="h-full px-[20px] lg:px-48 shadow-lg bg-slate-400 ">
    <div class="h-[100vh] py-5 h-full px-[42px] bg-slate-100">
      <!-- Header -->
      <div class="w-full flex justify-between items-end border-l-4 border-red-500 pl-3.5">
        <h2 class="text-3xl font-normal uppercase inline-block">
          Berita
          <span class="font-bold text-red-600">UNTAG</span>
          <span class="font-bold text-red-600">Terkini</span>
        </h2>
        <span class="text-sm text-slate-500 font-medium uppercase">
          waktu terkini <span class="font-bold"> 21:51</span> wib</span>
      </div>

      <!-- Konten Menu -->
      <div class="py-5  h-full w-full">
        <?php
        if (mysqli_num_rows($tampil_artikel) > 0) {
          while ($row = mysqli_fetch_assoc($tampil_artikel)) {
            ?>
            <a href="detail_artikel.php?id=<?php echo $row['id'] ?>"
              class="rounded-lg w-full hover:shadow-xl hover:bg-slate-200 hover:px-3 py-2 flex items-center justify-start gap-x-5">
              <img src="file/<?php echo $row['gambar'] ?>" class="w-[40%] h-[50%] rounded-lg" style="object-fit: cover" />
              <div class="flex flex-col">
                <h2 class="font-bold text-lg text-slate-700">
                  <?php echo $row['judul_berita'] ?>
                </h2>
                <h2 class="py-2 text-sm font-bold flex items-end gap-x-4 uppercase text-red-600">
                  <?php echo $row['penulis'] ?> <!-- Tambahkan penulis artikel -->
                  <span class="font-normal text-sm text-gray-500">
                    <?php echo date("j F", strtotime($row['tanggal_publish'])) ?>
                    <?php echo $row['penulis'] ?>
                  </span> <!-- Tambahkan tanggal -->
                  <span class="font-normal text-sm text-gray-500">
                    <?php echo date("H:i", strtotime($row['waktu_publish'])) ?> WIB
                  </span> <!-- Tambahkan waktu -->
                </h2>
              </div>
            </a>
            <?php
          }
        } else {
          echo $tampilerror = "Tidak Ada artikel Sama Sekali";
        }
        ?>

      </div>
    </div>
  </div>
</body>

</html>