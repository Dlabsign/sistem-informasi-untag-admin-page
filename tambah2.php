<?php
session_start();

require ('koneksi.php');
$error = "";

function generateNIM($conn)
{
    // Query untuk mendapatkan NIM terakhir dari database
    $nim = "SELECT MAX(nim) AS max_nim FROM tbl_mhsiswa";
    $result = mysqli_query($conn, $nim);
    $row = mysqli_fetch_assoc($result);
    $lastNIM = $row['max_nim'];
    // Ambil angka terakhir dari NIM terakhir
    $lastNumber = intval(substr($lastNIM, -5));
    // Tambah 1 pada angka terakhir
    $newNumber = $lastNumber + 1;
    // Hasilkan NIM baru dengan format "146220xxxx"
    $newNIM = "14622" . str_pad($newNumber, 5, "0", STR_PAD_LEFT);

    return $newNIM;
}


// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap
    $nama_mahasiswa = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $status = $_POST['status'];
    $jurusan = $_POST['jurusan'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    // Periksa apakah ada input yang kosong
    if (empty($nama_mahasiswa) || empty($kelamin) || empty($status) || empty($jurusan) || empty($tgl_lahir) || empty($asal_sekolah) || empty($pekerjaan) || empty($alamat) || empty($kota) || empty($provinsi) || empty($telepon) || empty($email)) {
        $error = "Semua field harus Terisi ! ";
    } else {
        // Generate NIM baru
        $nim = generateNIM($conn);
        // Query untuk menyisipkan data ke dalam tabel
        $query = "INSERT INTO tbl_mhsiswa (nama_mahasiswa, jns_kelamin, status_mhs, jurusan, tgl_lahir, nim, lulusan_sekolah, pekerjaan, alamat,kota,provinsi,telp,email) 
                  VALUES ('$nama_mahasiswa', '$kelamin', '$status','$jurusan','$tgl_lahir','$nim','$asal_sekolah','$pekerjaan','$alamat','$kota','$provinsi','$telepon','$email')";
        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo "Data mahasiswa berhasil disimpan";
            $_SESSION['nama_mahasiswa'] = $nama_mahasiswa;

            header("Location: tambah.php");
            exit(); // Penting untuk mencegah eksekusi lebih lanjut setelah pindah halaman
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
}
// Tutup koneksi ke database
mysqli_close($conn);
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
    <link href="output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="bg-slate-500">
    <div class="dash px-[20px] py-10 bg-slate-300 ">
        <h2 class="font-bold text-[45px] rounded-md mb-6 text-center py-5   bg-slate-600 text-slate-100">Tambah
            Mahasiswa</h2>
        <div class="card py-[52px] px-[42px]   bg-slate-100">
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>
            <form class="pb-3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Nama Mahasiswa -->
                <div class="mb-4">
                    <h6>Nama Mahasiswa</h6>
                    <input type="text" class="form-control" name="nama">
                </div>
                <!-- Jenis Kelamin -->
                <div class="mb-4">
                    <h6>Jenis Kelamin</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" value="L">
                        <label class="form-check-label">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" value="P">
                        <label class="form-check-label">
                            Perempuan
                        </label>
                    </div>
                </div>
                <!-- Status Mahasiswa -->
                <div class="mb-4">
                    <h6>Status Mahasiswa</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="status">
                        <option class="fw-bold" disabled selected>Pilih</option>
                        <option value="single">single</option>
                        <option value="menikah">menikah</option>
                        <option value="bekerja">bekerja</option>
                        <option value="pelajar">pelajar</option>
                    </select>
                </div>
                <!-- Tgl Lahir -->
                <div class="mb-4">
                    <h6>Tgl Lahir</h6>
                    <input type="date" id="tgl_lahir" name="tgl_lahir">
                </div>
                <!-- Jurusan Mahasiswa -->
                <div class="mb-4">
                    <h6>Jurusan Mahasiswa</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="jurusan">
                        <option class="fw-bold" disabled selected>Pilih</option>
                        <option value="informatika">informatika</option>
                        <option value="industri">industri</option>
                        <option value="mesin">mesin</option>
                        <option value="elektro">elektro</option>
                        <option value="arsitek">arsitek</option>
                    </select>
                </div>
                <!-- Asal Mahasiswa -->
                <div class="mb-4">
                    <h6>Asal Sekolah</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="asal_sekolah">
                        <option class="fw-bold" disabled selected>Pilih</option>
                        <option value="SMK">SMK</option>
                        <option value="SMA">SMA</option>
                    </select>
                </div>
                <!-- Pekejerjaan Mahasiswa -->
                <div class="mb-4">
                    <h6>Pekerjaan</h6>
                    <input type="text" class="form-control" name="pekerjaan">
                </div>
                <!-- Alamat Mahasiswa -->
                <div class="row g-3 mb-3">
                    <div class="col">
                        <h6>Alamat</h6>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="col">
                        <h6>kota</h6>
                        <input type="text" class="form-control" name="kota">
                    </div>
                    <div class="col">
                        <h6>provinsi</h6>
                        <input type="text" class="form-control" name="provinsi">
                    </div>
                </div>
                <div class="mb-3">
                    <h6>Telepon</h6>
                    <input type="text" class="form-control" name="telepon">
                </div>
                <div class="mb-3">
                    <h6>Email</h6>
                    <input type="text" class="form-control" name="email">
                </div>
                <button type="submit" class="mt-3 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>