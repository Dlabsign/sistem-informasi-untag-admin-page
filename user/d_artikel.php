<?php
require "../koneksi.php";

// Pastikan variabel diambil dari URL dengan benar
$idartikel = $_GET['id_artikel'];
$nim = $_GET['nim'];

// Ambil data mahasiswa
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_mhsiswa WHERE nim = '$nim'");
$data = mysqli_fetch_array($ambildata);

// Ambil data artikel
$artikel = mysqli_query($conn, "SELECT * FROM tbl_artikel WHERE id_artikel = '$idartikel'");
$tampil_artikel = mysqli_fetch_array($artikel);

// Cek apakah form telah disubmit
if (isset($_POST['simpan'])) {
    $isikomentar = $_POST['komentar'];
    date_default_timezone_set('Asia/Jakarta');
    $waktu = date("Y-m-d H:i");

    if (empty($isikomentar)) {
        $error = "Field Tidak Terisi";
    } else {
        // Lakukan query INSERT
        $query = "INSERT INTO tbl_komentar(id_berita_kampus, tanggal_komentar,nama, isi_komentar)
        VALUES ('$idartikel','$waktu', '$nim', '$isikomentar');
        ";
        if (mysqli_query($conn, $query)) {
            header("Location: artikel.php?nim=$nim");

        } else {
            echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($conn);
        }
    }

}

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
    <div class="h-full px-[20px] lg:px-48 shadow-lg bg-slate-400">
        <div class="h-[100vh] pb-[100px] h-full px-[42px] bg-slate-100 ">
            <div class="w-full flex justify-between items-center py-5 ">
                <a href="artikel.php?nim=<?php echo $data['nim'] ?>" class="fa-solid fa-arrow-left text-[20px]"></a>
                <h6 class="text-normal text-[20px] font-medium">Kabar Hari Ini</h6>
                <a class="fa-solid fa-rotate-right fa-spin text-[20px]"></a>
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
                <img src="../artikel/file/<?php echo $tampil_artikel['gambar'] ?>" style="object-fit: cover;"
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
            <div class="mb-4 font-bold text-normal flex flex-col gap-y-2">
                <form method="POST">
                    <h6 class="mb-1 w-full flex justify-between items-end">Beri Komentar <span
                            class="text-sm font-normal text-slate-500">Isi komentar Dengan Sopan</span></h6>
                    <textarea rows="5" type="text" name="komentar"
                        class="form-control w-[100%] bg-slate-300 "></textarea>
                    <button type="submit" name="simpan"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg w-full text-sm px-5 py-2.5 mt-2 mb-2">Kirim</button>
                </form>
            </div>

            <?php
            if (isset($_POST['id_to_delete'])) {
                $id_to_delete = $_POST['id_to_delete'];

                // Query untuk menghapus data berdasarkan ID
                $query_delete_data = "DELETE FROM tbl_komentar WHERE isi_komentar = '$id_to_delete'";
                $result_delete_data = mysqli_query($conn, $query_delete_data);

                if ($result_delete_data) {
                    echo "Data berhasil dihapus.";
                } else {
                    echo "Terjadi kesalahan saat menghapus data: " . mysqli_error($conn);
                }
            }
            // komentar
            $komentar_query = mysqli_query($conn, "SELECT * FROM tbl_komentar WHERE id_berita_kampus = '$idartikel'");
            while ($tampil_komentar = mysqli_fetch_array($komentar_query)) {
                ?>
                <div class="tampil mt-3.5 w-full border-t py-2 px-2 border-gray-600 ">
                    <h6 class="mb-1 w-full text-red-600 font-medium">
                        <?php echo $tampil_komentar['nama']; ?> <span class="font-normal text-sm text-slate-500"> |
                            <?php echo $tampil_komentar['tanggal_komentar'] ?>
                        </span>

                    </h6>
                    <h1 class="text-base font-medium text-slate-500 py-2 ">
                        <?php echo $tampil_komentar['isi_komentar']; ?>
                    </h1>
                    <div class="text-sm font-normal text-slate-500 py-2 uppercase">
                        <a class="pointer" onclick="deleteData('<?php echo $tampil_komentar['isi_komentar']; ?>')">hapus</a>
                    </div>
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

            function deleteData(id) {
                if (confirm('Apakah Anda yakin ingin menghapus komentar ini?')) {
                    var formData = new FormData();
                    formData.append('id_to_delete', id);

                    // Kirim data menggunakan AJAX untuk menghindari reload halaman
                    fetch('d_artikel.php', {
                        method: 'POST',
                        body: formData
                    })
                        .then(response => response.text())
                        .then(result => {
                            alert(result); // Tampilkan pesan hasil penghapusan
                            location.reload(); // Muat ulang halaman setelah menghapus data
                        })
                        .catch(error => console.error('Error:', error));
                }
            }
        </script>
</body>

</html>