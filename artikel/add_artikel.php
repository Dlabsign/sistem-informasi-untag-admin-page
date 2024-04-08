<?php
require ('../koneksi.php');

if (isset($_POST['simpan'])) {
    $penulis = $_POST['penulis'];
    $judul_berita = $_POST['judul_berita'];
    $isi_berita = $_POST['isi_berita'];
    $status_artikel = $_POST['status_artikel'];
    $tanggal_publish = $_POST['tanggal_publish'];
    date_default_timezone_set('Asia/Jakarta');
    $waktu = date("Y-m-d H:i");

    $gambar = $_FILES['gambar']['name'];
    $gambar_temp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($gambar_temp, 'file/' . $gambar);

    // Eksekusi query
    if (empty($isi_berita) || empty($penulis) || empty($judul_berita) || empty($tanggal_publish)) {
        $error = "Semua Field Harus Terisi";
    } else {
        $query = "INSERT INTO tbl_artikel (isi_berita, penulis, judul_berita, status_artikel, tanggal_publish, gambar, jam) 
                  VALUES ('$isi_berita', '$penulis','$judul_berita','$status_artikel','$tanggal_publish', '$gambar','$waktu')";
        if (mysqli_query($conn, $query)) {
            $berhasil = "Artikel Berhasil Disimpan";
        } else {
            echo "Terjadi kesalahan saat menyimpan data: " . mysqli_error($conn);
        }
    }
    // Tutup koneksi
    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-300 ">

    <div class="dash px-[20px] py-10 bg-slate-400 ">
        <h2 class="font-bold text-[45px] rounded-md mb-6 text-center py-5   bg-red-600 text-slate-100">Buat Artikel Baru</h2>

        <div class="card py-[20px] px-[42px]   bg-gray-200">
            <?php if (!empty($error)) { ?>
                <div class="font-bold text-base rounded-md mb-6 text-center py-2 bg-red-400 text-slate-50">
                    <?php echo $error; ?>
                </div>
            <?php } ?>
            <form enctype="multipart/form-data" method="POST"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <?php if (!empty($berhasil)) { ?>
                    <div class="font-bold text-base rounded-md mb-6 text-center py-2 bg-green-500 text-slate-50">
                        <?php echo $berhasil; ?>
                    </div>
                <?php } ?>
                <!-- Nama Mahasiswa -->
                <div class="mb-4 flex justify-between items-center  font-bold text-normal">
                    <h6>Penulis Artikel</h6>
                    <input type="text" class="form-control w-[66%] lg:w-[80%] font-medium" name="penulis">
                </div>
                <!-- Judul Berita -->
                <div class="mb-4 flex justify-between items-center  font-bold text-normal">
                    <h6>Judul Berita</h6>
                    <input type="text" class="form-control w-[66%] lg:w-[80%] font-medium" name="judul_berita">
                </div>
                <!-- Gambar -->
                <div class="mb-4 flex justify-between items-center  font-bold text-normal">
                    <h6>Upload Gambar</h6>
                    <input type="file" accept=".jpg, .jpeg, .png" class="form-control w-[66%] lg:w-[80%] py-2 "
                        name="gambar">

                </div>
                <!-- Isi Berita -->
                <div class="mb-4 flex justify-between items-center  font-bold text-normal">
                    <h6>Isi Berita</h6>
                    <textarea rows="7" class="form-control w-[66%] lg:w-[80%] font-medium text-sm "
                        name="isi_berita"></textarea>
                </div>
                <!-- Tanggal Publish -->
                <div class="mb-4 flex justify-between items-center  font-bold text-normal">
                    <h6>Jadwal Publish</h6>
                    <input type="date" class="form-control w-[66%] lg:w-[80%] font-medium" name="tanggal_publish">
                </div>

                <!-- Button submit -->
                <div class="w-full flex justify-end">
                    <button type="submit" name="simpan"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
                    <a href="../menu.php" type="kembali"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>