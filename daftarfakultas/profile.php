<?php
require '../koneksi.php';

$nim = $_GET['nim'];
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_mhsiswa WHERE nim = '$nim'");
$data = mysqli_fetch_array($ambildata);

$datanilai = mysqli_query($conn, "SELECT * FROM tbl_nilai_mahasiswa WHERE nim = '$nim'");
$nilai = array();

while ($roww = mysqli_fetch_assoc($datanilai)) {
  $nilai[] = $roww;
}

if (isset($_POST['simpan'])) {
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

  header("Location: ../daftarfakultas.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Mahasiswa Ilmu Budaya</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="style3.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- FLowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body class="bg-gray-300 mb-24">
  <div class="w-full flex justify-between items-center my-3 px-4">
    <a class="fa-solid fa-arrow-left text-[20px]" onclick="goBack()"></a>
    <h6 class="text-normal text-[20px] font-medium">Fakultas Ilmu Budaya</h6>
    <a class="fa-solid fa-rotate-right fa-spin text-[20px]" href="profil.php"></a>
  </div>

  <section class="px-3 w-full  py-3 flex flex-col lg:flex-row justify-between gap-x-3 lg:gap-x-3">
    <div class="w-[100%] lg:w-[50%] flex flex-col gap-y-3 mb-3 lg:mb-0">
      <!-- Profile -->
      <div class="shadow-lg rounded-lg bg-slate-50 flex flex-col items-center justify-center  py-2.5 h-[40vh]">
        <!-- gambar -->
        <img src="https://sim.untag-sby.ac.id/nfs/siakad/fotomhs/2022/1462200071.jpg?r=34234" alt=""
          class="w-[120px] h-[120px] rounded-full " style="object-fit: cover" />
        <div class="font-bold text-3xl">
          <?php echo $data['nama_mahasiswa']; ?>
        </div>
        <div class="font-medium text-base text-gray-500">
          <?php echo $data['nim']; ?>
        </div>
      </div>
      <!-- Grafik -->

      <div class="shadow-lg rounded-lg bg-slate-50 flex flex-col items-center justify-center  py-2.5 ">
        <div class="font-bold text-xl">Nilai Mata Kuliah</div>
        <canvas id="myChart" style="width: 100%; max-width: 600px"></canvas>
      </div>
    </div>

    <!-- biodata -->
    <div
      class="shadow-lg rounded-lg bg-slate-50 flex flex-col items-start justify-start border-b w-[100%] lg:w-[50%] py-4 px-4">
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Full Name :</h2>
        <h2 class="font-normal">
          <?php echo $data['nama_mahasiswa']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Status :</h2>
        <h2 class="font-normal">
          <?php echo $data['status_mhs']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Jenis kelamin :</h2>
        <h2 class="font-normal">
          <?php echo $data['jns_kelamin']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Tanggal Lahir :</h2>
        <h2 class="font-normal">
          <?php echo $data['tgl_lahir']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Prodi :</h2>
        <h2 class="font-normal">
          <?php echo $data['jurusan']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">IPK :</h2>
        <h2 class="font-normal">
          <?php echo $data['jurusan']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">SKS Di Capai :</h2>
        <h2 class="font-normal">
          <?php echo $data['jurusan']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Asal Sekolah :</h2>
        <h2 class="font-normal">
          <?php echo $data['lulusan_sekolah']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Pekerjaan :</h2>
        <h2 class="font-normal">
          <?php echo $data['pekerjaan']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Alamat :</h2>
        <h2 class="font-normal">
          <?php echo $data['alamat'] . ' , ' . $data['kota'] . ' , ' . $data['provinsi']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Telepon :</h2>
        <h2 class="font-normal">
          <?php echo $data['telp']; ?>
        </h2>
      </div>
      <div class="w-full flex justify-start items-center gap-y-5 font-medium text-base border-b border-gray-400 py-2.5">
        <h2 class="w-[190px] py-2 mr-3 bg-slate-300 px-2">Email :</h2>
        <h2 class="font-normal">
          <?php echo $data['email']; ?>
        </h2>
      </div>
    </div>
  </section>

  <script>
    function goBack() {
      window.history.back();
    }

    var data = <?php echo json_encode($nilai); ?>;
    var labels = [];
    var values = [];
    data.forEach(function (item) {
      labels.push(item.mata_kuliah);
      values.push(item.nilai_mahasiswa);
    });

    var barColors = ["#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145"];

    new Chart("myChart", {
      type: "doughnut",
      data: {
        labels: labels,
        datasets: [
          {
            backgroundColor: barColors,
            data: values,
          },
        ],
      },
    });

  </script>
</body>

</html>