<?php
session_start();

require ('koneksi.php');
$error = "";

function generateNIM($conn, $jurusan)
{
    // Mendefinisikan awalan NIM berdasarkan jurusan
    $awalanNIM = '';
    switch ($jurusan) {
        case 'informatika':
        case 'industri':
        case 'mesin':
        case 'elektro':
        case 'arsitek':
            $awalanNIM = '14622';
            break;
        case 'inggris':
        case 'jepang':
            $awalanNIM = '17122';
            break;
        case 'hukum':
            $awalanNIM = '13122';
            break;
        default:
            // Jika jurusan tidak valid, gunakan awalan default
            $awalanNIM = '00000';
            break;
    }

    // Query untuk mendapatkan NIM terakhir dari database
    $nimQuery = "SELECT MAX(nim) AS max_nim FROM tbl_mhsiswa WHERE jurusan = '$jurusan'";
    $result = mysqli_query($conn, $nimQuery);
    $row = mysqli_fetch_assoc($result);
    $lastNIM = $row['max_nim'];

    // Ambil angka terakhir dari NIM terakhir
    $lastNumber = intval(substr($lastNIM, -5));
    // Tambah 1 pada angka terakhir
    $newNumber = $lastNumber + 1;
    // Hasilkan NIM baru dengan format sesuai awalan dan angka terakhir yang telah ditambahkan
    $newNIM = $awalanNIM . str_pad($newNumber, 5, "0", STR_PAD_LEFT);

    return $newNIM;
}

$kelamin = "";
$status = "";
$jurusan = "";
$asal_sekolah = "";

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
        $nim = generateNIM($conn, $jurusan);
        // Query untuk menyisipkan data ke dalam tabel
        $query = "INSERT INTO tbl_mhsiswa (nama_mahasiswa, jns_kelamin, status_mhs, jurusan, tgl_lahir, nim, lulusan_sekolah, pekerjaan, alamat,kota,provinsi,telp,email) 
                  VALUES ('$nama_mahasiswa', '$kelamin', '$status','$jurusan','$tgl_lahir','$nim','$asal_sekolah','$pekerjaan','$alamat','$kota','$provinsi','$telepon','$email')";
        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            $_SESSION['nama_mahasiswa'] = $nama_mahasiswa;
            header("Location: dashboard.php");
            echo "<script>alert('Data mahasiswa berhasil disimpan');</script>";

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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-gray-300 ">
    <div class="dash px-[20px] py-10 bg-slate-400 ">
        <h2 class="font-bold text-[45px] rounded-md mb-6 text-center py-5   bg-slate-600 text-slate-100">Tambah
            Mahasiswa</h2>
        <div class="card py-[52px] px-[42px]   bg-gray-200">
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>
            <form class="pb-3" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- Nama Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Nama Mahasiswa</h6>
                    <input type="text" class="form-control" name="nama">
                </div>
                <!-- Jenis Kelamin -->
                <div class="mb-4 drop-shadow">
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
                <div class="mb-4 drop-shadow">
                    <h6>Status Mahasiswa</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="status">
                        <option class="fw-bold" disabled selected>Pilih</option>
                        <option value="single">single</option>
                        <option value="menikah">menikah</option>
                        <option value="bekerja">bekerja</option>
                        <option value="duda">duda</option>
                    </select>
                </div>
                <!-- Tgl Lahir -->
                <div class="mb-4 drop-shadow">
                    <h6>Tgl Lahir</h6>
                    <input type="date" id="tgl_lahir" name="tgl_lahir">
                </div>
                <!-- Jurusan Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Jurusan Mahasiswa</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="jurusan">
                        <option class="fw-bold" disabled selected>- Pilih - </option>
                        <option class="fw-bold" disabled>- Teknik - </option>
                        <option class="capitalize" value="informatika">informatika</option>
                        <option class="capitalize" value="industri">industri</option>
                        <option class="capitalize" value="mesin">mesin</option>
                        <option class="capitalize" value="elektro">elektro</option>
                        <option class="capitalize" value="arsitek">arsitek</option>
                        <option class="fw-bold" disabled>- Budaya - </option>
                        <option class="capitalize" value="inggris">S. Inggris</option>
                        <option class="capitalize" value="jepang">S. Jepang</option>
                        <option class="fw-bold" disabled>- Hukum- </option>
                        <option class="capitalize" value="hukum">Hukum</option>
                    </select>
                </div>
                <!-- Asal Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Asal Sekolah</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="asal_sekolah">
                        <option class="fw-bold" disabled selected>Pilih</option>
                        <option value="SMK">SMK</option>
                        <option value="SMA">SMA</option>
                    </select>
                </div>
                <!-- Pekejerjaan Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Pekerjaan</h6>
                    <input type="text" class="form-control" name="pekerjaan">
                </div>
                <!-- Alamat Mahasiswa -->
                <div class="row g-3 mb-3">
                    <div class="col drop-shadow">
                        <h6>Alamat</h6>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="col drop-shadow">
                        <h6>kota</h6>
                        <input type="text" class="form-control" name="kota">
                    </div>
                    <div class="col drop-shadow">
                        <h6>provinsi</h6>
                        <input type="text" class="form-control" name="provinsi">
                    </div>
                </div>
                <div class="mb-3 drop-shadow">
                    <h6>Telepon</h6>
                    <input type="text" class="form-control" name="telepon">
                </div>
                <div class="mb-3 drop-shadow">
                    <h6>Email</h6>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="w-full">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah</button>
                    <a href="menu.php" type="kembali"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>