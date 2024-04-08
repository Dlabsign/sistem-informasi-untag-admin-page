<?php
require "../koneksi.php";

$idartikel = $_GET['id_artikel'];

$artikel = mysqli_query($conn, "SELECT * FROM tbl_artikel WHERE id_artikel = '$idartikel'");
$tampil_artikel = mysqli_fetch_array($artikel);
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

<body class="bg-slate-400">
  <div class="h-full px-[20px] lg:px-48 shadow-lg bg-slate-400">
    <div class="h-[100vh] pb-5 h-full px-[42px] bg-slate-100">
      <div class="w-full flex justify-between items-center py-5 ">
        <a href="./artikelpage.php" class="fa-solid fa-arrow-left text-[20px]"></a>
        <h6 class="text-normal text-[20px] font-medium">Kabar Hari Ini</h6>
        <a class="fa-solid fa-rotate-right fa-spin text-[20px]" href="hukum.php"></a>
      </div>
      <!-- Header -->
      <div class="w-full flex flex-col justify-between items-start border-l-4 border-red-500 pl-3.5">
        <h2 class="text-3xl font-bold text-red-600 uppercase w-[90%] lg:w-[60%]">
          <?php echo $tampil_artikel['judul_berita'] ?>
        </h2>
        <span class="text-sm text-slate-500 mt-2 font-medium uppercase">
          <?php echo date("j F Y", strtotime($tampil_artikel['tanggal_publish'])) ?>
          |
          <?php echo $tampil_artikel['jam'] ?>
        </span>
      </div>

      <!-- isi Konten -->
      <div class="py-5 h-full w-full lg:flex lg:gap-x-5   ">
        <img src="file/<?php echo $tampil_artikel['gambar'] ?>" style="object-fit: cover;"
          class="h-[270px] w-full lg:w-[50%] hover:shadow-lg">
        <div class="lg:w-[50%] w-full ">
          <h2 class="font-normal text-sm uppercase">
            penulis -
            <span class=" text-red-700 mb-5 font-medium uppercase">
              <?php echo $tampil_artikel['penulis'] ?>
            </span>
          </h2>
          <!-- isi berita -->
          <div class="py-8">
            <h6 class="text-base text-[14px] leading-[1.8rem] font-normal ">
              <?php echo $tampil_artikel['isi_berita'] ?>
            </h6>
          </div>
        </div>
      </div>

      <!-- Komentar -->
      <?php
      // komentar
      $komentar_query = mysqli_query($conn, "SELECT * FROM tbl_komentar WHERE id_berita_kampus = '$idartikel'");
      while ($tampil_komentar = mysqli_fetch_array($komentar_query)) {
        ?>
        <div class="tampil mt-3.5 w-full border-t py-2 px-2 border-gray-600 ">
          <h6 class="mb-1 w-full text-red-600 font-medium">
            <?php echo $tampil_komentar['nama']; ?> <span class="font-normal text-sm text-slate-500">-
              <?php echo $tampil_komentar['tanggal_komentar'] ?>
            </span>

          </h6>
          <span class="text-sm font-normal text-slate-500 py-2 ">
            <?php echo $tampil_komentar['isi_komentar']; ?>
          </span>
          <a href="" class="text-sm font-normal text-slate-500 py-2">edit</a>
        </div>
        <?php
      }
      ?>
    </div>
    <script>
      function detail_artikel(id) {
        // Redirect ke halaman edit dengan menyertakan ID data yang ingin diedit
        window.location.href = "detail_artikel.php?id=" + id;
      }
    </script>
</body>

</html>