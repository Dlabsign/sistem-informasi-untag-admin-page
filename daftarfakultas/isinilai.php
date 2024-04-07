<?php
require ('../koneksi.php');

$nimmhs = $_GET['nim'];

if (isset($_POST['simpan'])) {
  // Ambil nilai dari formulir
  $mata_kuliah = $_POST['mata_kuliah'];
  $nilai = $_POST['nilai'];
  $pengajar = $_POST['pengajar']; // Pastikan Anda telah mendefinisikan variabel $pengajar

  // Ambil NIM dari input tersembunyi
  $nim = $_POST['nim'];

  // Query untuk menyimpan nilai ke dalam tabel
  $query = "INSERT INTO tbl_nilai_mahasiswa (nim, mata_kuliah, nilai_mahasiswa, dosen_mata_kuliah) 
            VALUES ('$nimmhs', '$mata_kuliah','$nilai','$pengajar')"; // Menggunakan variabel $nim yang telah diambil sebelumnya

  // Eksekusi query
  if (mysqli_query($conn, $query)) {
    echo "Nilai berhasil disimpan.";
  } else {
    echo "Terjadi kesalahan saat menyimpan nilai: " . mysqli_error($conn);
  }

  // Tutup koneksi ke database
  header("Location: ../daftarfakultas.php");

  mysqli_close($conn);
}


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
    <button onclick="goBack()" class="fa-solid fa-arrow-left text-[20px]"></button>
    <h6 class="text-normal text-[20px] font-medium">Edit Nilai</h6>
    <a class="fa-solid fa-rotate-right fa-spin text-[20px]" href="teknik.php"></a>
  </div>

  <section class="w-full bg-white text-center pb-2">
    <h2 class="font-bold text-xl bg-gray-50 text-gray-500 py-4 uppercase">
      ISI Nilai Mahasiswa
      <?php echo $nimmhs ?>
    </h2>
    <form method="POST">
      <div class="overflow-x-auto">
        <div class="inline-block min-w-full lg:px-8">
          <div class="overflow-hidden">
            <table class="min-w-full text-left rounded text-sm font-light text-surface dark:text-black bg-slate-50">
              <thead class="bg-white font-normal dark:bg-body-dark border-b border-gray-300 uppercase">
                <tr>
                  <th scope="col" class="px-6 py-4">MATA KULIAH</th>
                  <th scope="col" class="px-6 py-4">Nilai</th>
                  <th scope="col" class="px-6 py-4">Pengajar Mata Kuliah</th>
                  <!-- Kolom untuk aksi -->
                </tr>
              </thead>
              <tbody>
                <form method="POST">
                  <tr
                    class="cursor-pointer border-b border-neutral-200 bg-black/[0.02] dark:border-white/10 font-medium">
                    <td class="px-4 py-4 border-b border-gray-300">
                      <select class="form-select mb-3" aria-label="Default select example" name="mata_kuliah">
                        <option class="fw-bold" value="Dasar-Dasar Pemrograman">
                          Dasar-Dasar Pemrograman
                        </option>
                        <option class="fw-bold" value="MANAJEMEN BASIS DATA">
                          MANAJEMEN BASIS DATA
                        </option>
                        <option class="fw-bold" value="SISTEM JARINGAN KOMPUTER">
                          SISTEM JARINGAN KOMPUTER
                        </option>
                        <option class="fw-bold" value="SISTEM APLIKASI MULTIMEDIA">
                          SISTEM APLIKASI MULTIMEDIA
                        </option>
                        <option class="fw-bold" value="ETIKA TEKNOLOGI INFORMASI">
                          ETIKA TEKNOLOGI INFORMASI
                        </option>
                        <option class="fw-bold" value="STRUKTUR DATA DAN ALGORITMA">
                          STRUKTUR DATA DAN ALGORITMA
                        </option>
                        <option class="fw-bold" value="ARSITEKTUR DAN ORGANISASI KOMPUTER">
                          ARSITEKTUR DAN ORGANISASI KOMPUTER
                        </option>
                        <option class="fw-bold" value="PEMROGRAMAN BERORIENTASI OBJEK FUNGSIONAL">
                          PEMROGRAMAN BERORIENTASI OBJEK FUNGSIONAL
                        </option>
                      </select>
                    </td>
                    <td class="px-4 py-4 border-b border-gray-300">
                      <input type="number" name="nilai" value="" class="w-[100%]" />
                    </td>
                    <td class="px-4 py-4 border-b border-gray-300">
                      <select class="form-select mb-3" aria-label="Default select example" name="pengajar">
                        <option class="fw-bold" value="Fridy Mandita, S.Kom., M.Sc" selected>
                          Fridy Mandita, S.Kom., M.Sc
                        </option>
                        <option class="fw-bold" value="Geri KusnantoS.Kom.,MM">
                          Geri KusnantoS.Kom.,MM
                        </option>
                        <option class="fw-bold" value="Elsen RonandoS.Si.,M.Si">
                          Elsen RonandoS.Si.,M.Si
                        </option>
                        <option class="fw-bold" value="Anang PramonoS.Kom.,MM">
                          Anang PramonoS.Kom.,MM
                        </option>
                        <option class="fw-bold" value="Ahmad HabibS.Kom.,MM">
                          Ahmad HabibS.Kom.,MM
                        </option>
                        <option class="fw-bold" value="Luvia Friska NS.ST.,MT">
                          Luvia Friska NS.ST.,MT
                        </option>
                        <option class="fw-bold" value="Bagus Hardiansyah, S.Kom., M.Si">
                          Bagus Hardiansyah, S.Kom., M.Si
                        </option>
                      </select>
                    </td>
                  </tr>
                </form>
              </tbody>
            </table>
            <div class="mt-2 font-bold w-full flex justify-end gap-x-2">
              <button type="submit" name="simpan" class="rounded-lg py-2 px-4 bg-green-500 text-gray-50 text-center">
                Simpan
              </button>
              <!-- Tombol reset -->
              <button onclick="Kembali()" type="reset" class="rounded-lg py-2 px-4 bg-red-500 text-gray-50 text-center">
                Kembali
              </button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>

  <script>
    function goBack() {
      window.history.back();
    }
    function Kembali() {
      window.location.href = "../daftarfakultas.php";
    }

    function changeCourseCode(select) {
      var courseCodeElement = document.getElementById("courseCode");
      if (select.value === "KECERDASAN ARTIFISIAL") {
        courseCodeElement.innerText = "146200043";
      } else {
        courseCodeElement.innerText = "14620034";
      }
    }

  </script>
  </script>
</body>

</html>