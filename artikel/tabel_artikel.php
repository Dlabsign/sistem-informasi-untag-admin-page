<?php
require ('../koneksi.php');

// Mendapatkan ID dari data yang ingin dihapus jika ada
if (isset($_POST['id_to_delete'])) {
  $id_to_delete = $_POST['id_to_delete'];

  // Melakukan sanitasi pada input ID untuk mencegah serangan injeksi SQL
  $id_to_delete = mysqli_real_escape_string($conn, $id_to_delete);

  $query_delete_data = "DELETE FROM tbl_artikel WHERE id_artikel = '$id_to_delete'";
  $result_delete_data = mysqli_query($conn, $query_delete_data);

  if ($result_delete_data) {
    echo "Data berhasil dihapus.";
  } else {
    echo "Terjadi kesalahan saat menghapus data: " . mysqli_error($conn);
  }
}

// Mengambil data artikel
$Artikel = "SELECT * FROM tbl_artikel";
$tbl_Artikel = mysqli_query($conn, $Artikel);
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

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- FLowbite -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body class="bg-gray-300 mb-24">
  <div class="w-full flex justify-between items-center my-3 px-4">
    <a href="../menu.php" class="fa-solid fa-arrow-left text-[20px]"></a>
    <h6 class="text-normal text-[20px] font-medium">Detail Artikel</h6>
    <a class="fa-solid fa-rotate-right fa-spin text-[20px]" href="budaya.php"></a>
  </div>

  <section class="w-full bg-white text-center ">
    <h2 class="font-bold text-xl bg-slate-500 text-gray-50 py-4 uppercase">Tabel Jurusan Ilmu Budaya</h2>
    <div class="overflow-x-auto w- ">
      <div class="inline-block min-w-full lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left rounded text-sm font-light text-surface dark:text-black bg-slate-50">
            <thead class="bg-white font-normal dark:bg-body-dark border-b border-gray-300 uppercase">
              <tr>
                <th scope="col" class="px-6 py-4">id_artikel</th>
                <th scope="col" class="px-6 py-4">penulis</th>
                <th scope="col" class="px-6 py-4">Judul Berita</th>
                <th scope="col" class="px-6 py-4">Tanggal Publish</th>
                <th scope="col" class="px-6 py-4">Isi Berita</th>
                <th scope="col" class="px-6 py-4">Aksi</th>
                <!-- Kolom untuk aksi -->
              </tr>
            </thead>
            <tbody>
              <?php
              // Periksa apakah ada baris data yang dihasilkan dari query
              if (mysqli_num_rows($tbl_Artikel) > 0) {
                // Loop melalui setiap baris data
                while ($row = mysqli_fetch_assoc($tbl_Artikel)) {
                  ?>
                  <tr class="cursor-pointer border-t border-neutral-200 bg-black/[0.02] dark:border-white/10 font-medium ">
                    <td class="px-6 py-4 border-t border-gray-300  ">
                      <?php echo $row['id_artikel']; ?>
                    </td>
                    <td class="px-6 py-4 border-t border-gray-300 ">
                      <?php echo $row['penulis']; ?>
                    </td>
                    <td class="px-6 py-4 border-t border-gray-300 ">
                      <?php echo $row['judul_berita']; ?>
                    </td>
                    <td class="px-6 py-4 border-t border-gray-300 ">
                      <?php echo $row['tanggal_publish']; ?>
                    </td>
                    <td class="px-6 py-4 text-pretty border-t border-gray-300 ">
                      <?php echo $row['isi_berita']; ?>
                    </td>
                    <td class="flex flex-col py-4 items-center px-6 border-t border-gray-300 gap-y-2">
                      <!-- Tombol edit -->
                      <a class="rounded-lg py-2 px-4 bg-blue-600 text-gray-100 text-center"
                        href="edit_artikel.php?id_artikel=<?php echo $row['id_artikel'] ?>">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <!-- Tombol delete -->
                      <a class="rounded-lg py-2 px-4 bg-red-500 text-gray-50 text-center"
                        onclick="deleteData('<?php echo $row['id_artikel']; ?>')">
                        <i class="fa-solid fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  <?php
                }
              } else {
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
    function editData(id) {
      window.location.href = 'edit_artikel.php?id=' + id;
    }
    function deleteData(id) {
      if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        var formData = new FormData();
        formData.append('id_to_delete', id);

        fetch('<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>', {
          method: 'POST',
          body: formData
        })
          .then(response => response.text())
          .then(result => {
            alert(result);
            location.reload();
          })
          .catch(error => console.error('Error:', error));
      }
    }
  </script>
</body>

</html>