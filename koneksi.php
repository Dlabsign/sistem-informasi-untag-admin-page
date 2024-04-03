<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sistem_informasi';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// -------------- Hitung Jumlah Laki
$jumlah_laki_query = "SELECT COUNT(*) AS jumlah_laki FROM tbl_mhsiswa WHERE jns_kelamin = 'L'";
$result_laki = $conn->query($jumlah_laki_query);
// Ambil baris pertama hasil atau set jumlah_laki menjadi 0 jika tidak ada hasil
$row_laki = $result_laki->fetch_assoc() ?? ["jumlah_laki" => 0];
// Ambil nilai jumlah mahasiswa laki-laki
$jumlah_laki = $row_laki["jumlah_laki"];
// ========================================================

// -------------- Hitung Jumlah Perempuan
$jumlah_perempuan_query = "SELECT COUNT(*) AS jumlah_perempuan FROM tbl_mhsiswa WHERE jns_kelamin = 'P'";
$result_perempuan = $conn->query($jumlah_perempuan_query);
// Ambil baris pertama hasil atau set jumlah_perempuan menjadi 0 jika tidak ada hasil
$row_perempuan = $result_perempuan->fetch_assoc() ?? ["jumlah_perempuan" => 0];
// Ambil nilai jumlah mahasiswa perempuan
$jumlah_perempuan = $row_perempuan["jumlah_perempuan"];
// ========================================================

// -------------- Hitung Jumlah Mahasiswa Semua
$jumlahmhs_query = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa";
$result_jumlahmhs = $conn->query($jumlahmhs_query);
// Ambil baris pertama hasil atau set jumlahmhs menjadi 0 jika tidak ada hasil
$row_jumlahmhs = $result_jumlahmhs->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
// Ambil nilai jumlah mahasiswa
$jumlahmhs = $row_jumlahmhs["jumlah_mahasiswa"];
// ========================================================


// Perintah SQL untuk menghitung jumlah mahasiswa Industri
$jml_industri = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Industri'";
$hasil_industri = $conn->query($jml_industri);
$row_industri = $hasil_industri->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$industri = $row_industri["jumlah_mahasiswa"];
// ========================================================

// Perintah SQL untuk menghitung jumlah mahasiswa Informatika
$jml_informatika = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Informatika'";
$hasil_informatika = $conn->query($jml_informatika);
$row_informatika = $hasil_informatika->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$informatika = $row_informatika["jumlah_mahasiswa"];
// ========================================================

// Perintah SQL untuk menghitung jumlah mahasiswa Arsitek
$jml_arsitek = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Arsitek'";
$hasil_arsitek = $conn->query($jml_arsitek);
$row_arsitek = $hasil_arsitek->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$arsitek = $row_arsitek["jumlah_mahasiswa"];
// ========================================================

// Perintah SQL untuk menghitung jumlah mahasiswa Mesin
$jml_mesin = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Mesin'";
$hasil_mesin = $conn->query($jml_mesin);
$row_mesin = $hasil_mesin->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$mesin = $row_mesin["jumlah_mahasiswa"];
// ========================================================

// Perintah SQL untuk menghitung jumlah mahasiswa Elektro
$jml_elektro = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Elektro'";
$hasil_elektro = $conn->query($jml_elektro);
$row_elektro = $hasil_elektro->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$elektro = $row_elektro["jumlah_mahasiswa"];
// ========================================================

// Perintah SQL untuk menghitung jumlah mahasiswa Hukum
$jml_hukum = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Hukum'";
$hasil_hukum = $conn->query($jml_hukum);
$row_hukum = $hasil_hukum->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$hukum = $row_hukum["jumlah_mahasiswa"];
// ========================================================

// Perintah SQL untuk menghitung jumlah mahasiswa Inggris
$jml_inggris = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Inggris'";
$hasil_inggris = $conn->query($jml_inggris);
$row_inggris = $hasil_inggris->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$inggris = $row_inggris["jumlah_mahasiswa"];
// ========================================================

// Perintah SQL untuk menghitung jumlah mahasiswa Jepang
$jml_jepang = "SELECT COUNT(*) AS jumlah_mahasiswa FROM tbl_mhsiswa WHERE jurusan = 'Jepang'";
$hasil_jepang = $conn->query($jml_jepang);
$row_jepang = $hasil_jepang->fetch_assoc() ?? ["jumlah_mahasiswa" => 0];
$jepang = $row_jepang["jumlah_mahasiswa"];
// ========================================================

ini_set('display_errors', 'Off');



?>