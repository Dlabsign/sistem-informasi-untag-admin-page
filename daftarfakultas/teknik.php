<?php
require ('../koneksi.php');
$infor = "SELECT * FROM tbl_mhsiswa WHERE jurusan='Informatika'"; // Gantilah 'nama_tabel' dengan nama tabel Anda
$tbl_infor = mysqli_query($conn, $infor);

$mesin = "SELECT * FROM tbl_mhsiswa WHERE jurusan='Mesin'"; // Gantilah 'nama_tabel' dengan nama tabel Anda
$tbl_mesin = mysqli_query($conn, $mesin);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Mahasiswa Teknik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FLowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </head>
</head>

<body class="bg-gray-300 mb-24">
  <div class="w-full flex justify-between items-center my-3 px-4">
    <a href="../daftarmhs.php" class="fa-solid fa-arrow-left text-[20px]"></a>
    <h6 class="text-normal text-[20px] font-medium">Fakultas Teknik</h6>
    <a class="fa-solid fa-rotate-right fa-spin text-[20px]" href="teknik.html"></a>
  </div>

  <section class="w-full py-4 px-4 text-center">

    <!-- Informatika -->
    <div id="accordion-color" data-accordion="collapse"
      data-active-classes="bg-blue-50 dark:bg-slate-50 text-gray-100 dark:text-slate-700">

      <!-- Informatika -->
      <div class="mb-4">
        <h2 id="accordion-color-heading-1">
          <button type="button"
            class=" py-4 px-5 flex items-center text-[24px] justify-between w-full font-medium rtl:text-right text-gray-600 bg-slate-50 rounded-xl dark:text-gray-700 gap-3 mb-2"
            data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
            <span>Informatika</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
          <div
            class="flex items-center text-base justify-between w-full font-medium rtl:text-right text-gray-100 bg-slate-50 dark:text-gray-700 gap-3 rounded-xl">
            <div class="overflow-x-auto  w-full rounded-xl">
              <div class="inline-block min-w-full  lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-left text-sm font-light text-surface dark:text-black">
                    <thead class=" bg-white font-normal  dark:bg-body-dark border-b border-gray-300 uppercase">
                      <tr>
                        <th scope="col" class="px-6 py-4">NIM</th>
                        <th scope="col" class="px-6 py-4">NAMA</th>
                        <th scope="col" class="px-6 py-4">Gender</th>
                        <th scope="col" class="px-6 py-4">IPK</th>
                        <th scope="col" class="px-6 py-4">Tahun ajaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Periksa apakah ada baris data yang dihasilkan dari query
                      if (mysqli_num_rows($tbl_infor) > 0) {
                        // Loop melalui setiap baris data
                        while ($row = mysqli_fetch_assoc($tbl_infor)) {
                          ?>
                          <tr
                            class="cursor-pointer border-b border-neutral-200 bg-black/[0.02] dark:border-white/10 font-medium">
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['nim']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['nama_mahasiswa']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['jns_kelamin']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['jurusan']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['tahun_ajaran']; ?>
                            </td>
                          </tr>
                          <?php
                        }
                      } else {
                        // Jika tidak ada baris data yang dihasilkan
                        ?>
                        <tr>
                          <td colspan="5">Tidak ada data yang tersedia</td>
                        </tr>
                        <?php
                      }
                      // Tutup koneksi ke database
                      mysqli_close($conn);
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mesin -->

      <div class="mb-4">
        <h2 id="accordion-color-heading-2">
          <button type="button"
            class=" py-4 px-5 flex items-center text-[24px] justify-between w-full font-medium rtl:text-right text-gray-600 bg-slate-50 rounded-t-xl dark:text-gray-700 gap-3 rounded-xl mb-2"
            data-accordion-target="#accordion-color-body-2" aria-expanded="true" aria-controls="accordion-color-body-1">
            <span>Mesin</span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5 5 1 1 5" />
            </svg>
          </button>
        </h2>
        <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
          <div
            class=" flex items-center text-base justify-between w-full font-medium rtl:text-right text-gray-100 bg-slate-50 dark:text-gray-700 gap-3 rounded-xl">
            <div class="overflow-x-auto  w-full rounded-xl">
              <div class="inline-block min-w-full  lg:px-8 ">
                <div class="overflow-hidden">
                  <table class="min-w-full text-left text-sm font-light text-surface dark:text-black">
                    <thead class=" bg-white font-normal  dark:bg-body-dark border-b border-gray-300 uppercase">
                      <tr>
                        <th scope="col" class="px-6 py-4">NIM</th>
                        <th scope="col" class="px-6 py-4">NAMA</th>
                        <th scope="col" class="px-6 py-4">Gender</th>
                        <th scope="col" class="px-6 py-4">IPK</th>
                        <th scope="col" class="px-6 py-4">Tahun ajaran</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Periksa apakah ada baris data yang dihasilkan dari query
                      if (mysqli_num_rows($tbl_mesin) > 0) {
                        // Loop melalui setiap baris data
                        while ($row = mysqli_fetch_assoc($tbl_mesin)) {
                          ?>
                          <tr
                            class="cursor-pointer border-b border-neutral-200 bg-black/[0.02] dark:border-white/10 font-medium capitalize">
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['nim']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['nama_mahasiswa']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['jns_kelamin']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['jurusan']; ?>
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4 border-b border-gray-300">
                              <?php echo $row['tahun_ajaran']; ?>
                            </td>
                          </tr>
                          <?php
                        }
                      } else {
                        // Jika tidak ada baris data yang dihasilkan
                        ?>
                        <tr>
                          <td colspan="5">Tidak ada data yang tersedia</td>
                        </tr>
                        <?php
                      }
                      // Tutup koneksi ke database
                      mysqli_close($conn);
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>
</body>

</html>