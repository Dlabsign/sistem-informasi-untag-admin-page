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
    <link rel="stylesheet" href="style3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FLowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  </head>
</head>

<body class="bg-gray-300 ">
  <div class="w-full flex justify-between items-center my-3 px-4">
    <a href="../daftarmhs.php" class="fa-solid fa-arrow-left text-[20px]"></a>
    <h6 class="text-normal text-[20px] font-medium">Fakultas Teknik</h6>
    <a class="fa-solid fa-rotate-right fa-spin text-[20px]" href="teknik.html"></a>
  </div>

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
  <div id="accordion-color" data-accordion="collapse-2"
    data-active-classes="bg-blue-50 dark:bg-slate-50 text-gray-100 dark:text-slate-700">

    <!-- Informatika -->
    <div class="mb-4">
      <h2 id="accordion-color-heading-3">
        <button type="button"
          class=" py-4 px-5 flex items-center text-[24px] justify-between w-full font-medium rtl:text-right text-gray-600 bg-slate-50 rounded-xl dark:text-gray-700 gap-3 mb-2"
          data-accordion-target="#accordion-color-body-3" aria-expanded="true" aria-controls="accordion-color-body-3">
          <span>Informatika</span>
          <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5 5 1 1 5" />
          </svg>
        </button>
      </h2>
      <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
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

  <div id="accordion-arrow-icon" data-accordion="open">
    <h2 id="accordion-arrow-icon-heading-1">
      <button type="button"
        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-900 bg-gray-100 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
        data-accordion-target="#accordion-arrow-icon-body-1" aria-expanded="true"
        aria-controls="accordion-arrow-icon-body-1">
        <span>Accordion without an arrow</span>
      </button>
    </h2>
    <div id="accordion-arrow-icon-body-1" aria-labelledby="accordion-arrow-icon-heading-1">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components
          built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
            href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get
            started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
      </div>
    </div>
    <h2 id="accordion-arrow-icon-heading-2">
      <button type="button"
        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
        data-accordion-target="#accordion-arrow-icon-body-2" aria-expanded="false"
        aria-controls="accordion-arrow-icon-body-2">
        <span>Accordion with another icon</span>
        <svg class="w-4 h-4 shrink-0 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
      </button>
    </h2>
    <div id="accordion-arrow-icon-body-2" class="hidden" aria-labelledby="accordion-arrow-icon-heading-2">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma
          software so everything you see in the library has a design equivalent in our Figma file.</p>
        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
            class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility
          classes from Tailwind CSS and components from Flowbite.</p>
      </div>
    </div>
    <h2 id="accordion-arrow-icon-heading-3">
      <button type="button"
        class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
        data-accordion-target="#accordion-arrow-icon-body-3" aria-expanded="false"
        aria-controls="accordion-arrow-icon-body-3">
        <span>Accordion without arrow rotation</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 5 5 1 1 5" />
        </svg>
      </button>
    </h2>
    <div id="accordion-arrow-icon-body-3" class="hidden" aria-labelledby="accordion-arrow-icon-heading-3">
      <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite
          are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that
          Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite
          Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
          <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite
              Pro</a></li>
          <li><a href="https://tailwindui.com/" rel="nofollow"
              class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
        </ul>
      </div>
    </div>
  </div>

</body>

</html>