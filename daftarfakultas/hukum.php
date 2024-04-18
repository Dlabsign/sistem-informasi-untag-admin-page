<?php
require ('../koneksi.php');

// Mendapatkan ID dari data yang ingin dihapus jika ada
if (isset($_POST['id_to_delete'])) {
  $id_to_delete = $_POST['id_to_delete'];

  // Query untuk menghapus data berdasarkan ID
  $query_delete_data = "DELETE FROM tbl_mhsiswa WHERE nim = '$id_to_delete'";
  $result_delete_data = mysqli_query($conn, $query_delete_data);

  if ($result_delete_data) {
    echo "Data berhasil dihapus.";
  } else {
    echo "Terjadi kesalahan saat menghapus data: " . mysqli_error($conn);
  }
}

$hukum = "SELECT * FROM tbl_mhsiswa WHERE jurusan='Hukum'";
$tbl_hukum = mysqli_query($conn, $hukum);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Daftar Mahasiswa Hukum</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="style3.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- FLowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body class="bg-gray-300 mb-24">
  <div class="w-full flex justify-between items-center my-3 px-4">
    <a href="../daftarfakultas.php" class="fa-solid fa-arrow-left text-[20px]"></a>
    <h6 class="text-normal text-[20px] font-medium">Fakultas Hukum</h6>
    <a class="fa-solid fa-rotate-right fa-spin text-[20px]" href="hukum.php"></a>
  </div>

  <section class="w-full bg-white text-center ">
    <h2 class="font-bold text-xl bg-red-500 text-gray-50 py-4 uppercase">Tabel Jurusan HUKUM</h2>
    <div class="overflow-x-auto w- ">
      <div class="inline-block min-w-full lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left rounded text-sm font-light text-surface dark:text-black bg-slate-50">
            <thead class="bg-white font-normal dark:bg-body-dark border-b border-gray-300 uppercase">
              <tr>
                <th scope="col" class="px-6 py-4">NIM</th>
                <th scope="col" class="px-6 py-4">NAMA</th>
                <th scope="col" class="px-6 py-4">Alamat</th>
                <th scope="col" class="px-6 py-4">Jurusan</th>
                <th scope="col" class="px-6 py-4">Tgl Lahir</th>
                <th scope="col" class="px-6 py-4">Tahun ajaran</th>
                <th scope="col" class="px-6 py-4">Aksi</th>
                <!-- Kolom untuk aksi -->
              </tr>
            </thead>
            <tbody>
              <?php
              // Periksa apakah ada baris data yang dihasilkan dari query
              if (mysqli_num_rows($tbl_hukum) > 0) {
                // Loop melalui setiap baris data
                while ($row = mysqli_fetch_assoc($tbl_hukum)) {
                  ?>
                  <tr class="cursor-pointer border-b border-neutral-200 bg-black/[0.02] dark:border-white/10 font-medium">
                    <td class="px-6 py-4 border-b border-gray-300">
                      <?php echo $row['nim']; ?>
                    </td>
                    <td class="px-6 py-4 border-b border-gray-300">
                      <?php echo $row['nama_mahasiswa']; ?>
                    </td>
                    <td class="px-6 py-4 border-b border-gray-300">
                      <?php echo $row['alamat']; ?>
                    </td>
                    <td class="px-6 py-4 border-b border-gray-300">
                      <?php echo $row['jurusan']; ?>
                    </td>
                    <td class="px-6 py-4 border-b border-gray-300">
                      <?php echo $row['tgl_lahir']; ?>
                    </td>
                    <td class="px-6 py-4 border-b border-gray-300">
                      <?php echo $row['tahun_ajaran']; ?>
                    </td>
                    <td class="flex flex-col px-6 py-4 border-b border-gray-300 gap-y-2">
                      <!-- Tombol edit -->
                      <a class="rounded-lg py-2 px-4 bg-blue-500 text-gray-50 text-center"
                        href="profile.php?nim=<?php echo $row['nim'] ?>">
                        <i class="fa-solid fa-circle-info"></i>
                      </a>
                      <a class="rounded-lg py-2 px-4 bg-green-600 text-gray-50 text-center"
                        href="isinilai.php?nim=<?php echo $row['nim'] ?>">
                        <i class="fa-solid fa-plus"></i>
                      </a>
                      <a class="rounded-lg py-2 px-4 bg-yellow-400 text-gray-50 text-center"
                        href="editdatamhs.php?nim=<?php echo $row['nim'] ?>">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <!-- Tombol delete -->
                      <a class="rounded-lg py-2 px-4 bg-red-500 text-gray-50 text-center"
                        onclick="deleteData('<?php echo $row['nim']; ?>')">
                        <i class="fa-solid fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                }
              } else {
                // Jika tidak ada baris data yang dihasilkan
                ?>
                <tr>
                  <td colspan="6">Tidak ada data yang tersedia</td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <script>
    function isinilai(id) {
      // Redirect ke halaman edit dengan menyertakan ID data yang ingin diedit
      window.location.href = 'isinilai.php?id=' + id;
    }

    function profile(id) {
      // Redirect ke halaman edit dengan menyertakan ID data yang ingin diedit
      window.location.href = 'profile.php?id=' + id;
    }

    function editData(id) {
      // Redirect ke halaman edit dengan menyertakan ID data yang ingin diedit
      window.location.href = 'editdatamhs.php?id=' + id;
    }

    function deleteData(id) {
      // Konfirmasi pengguna sebelum menghapus data
      if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        // Kirim ID data yang ingin dihapus ke halaman ini untuk pemrosesan
        var formData = new FormData();
        formData.append('id_to_delete', id);

        // Kirim data menggunakan AJAX untuk menghindari reload halaman
        fetch('teknik.php', {
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