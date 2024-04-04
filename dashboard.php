<?php
require ('koneksi.php');


// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- <script>
        setTimeout(function () {
            location.reload();
        }, 1000); // Reload setiap 5 detik (5000 milidetik)
    </script> -->
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-300 mb-24">
    <nav class="fixed w-[50%] flex flex-row justify-center items-center gap-2  bottom-0 w-full px-2 py-2 bg-gray-50">
        <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-slate-400 gap-y-[2px]"
            href="dashboard.php">
            <i class="fa-solid fa-house"></i>
            <h6 class="text-sm font-medium">dashboard</h6>
        </a>
        <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
            href="menu.php">
            <i class="fa-solid fa-bars fa-beat-fade"></i>
            <h6 class="text-sm font-medium">Menu</h6>
        </a>
        <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
            href="daftarfakultas.php">
            <i class="fa-solid fa-house"></i>
            <h6 class="text-sm text-center font-medium">Daftar Mahasiswa</h6>
        </a>
        <a class="w-full px-[20px] py-2 flex flex-col justify-center items-center h-[100%] rounded hover:bg-gray-400 gap-y-[2px]"
            href="dashboard.php">
            <i class="fa-solid fa-book"></i>
            <h6 class="text-sm font-medium">Artikel</h6>
        </a>

    </nav>

    <div class=" flex flex-col justify-center items-center px-3 ">
        <h2 class="text-[35px] text-center py-8 font-bold">SISTEM INFORMASI UNTAG SURABAYA</h2>
        <div
            class="hover:shadow-lg bg-gray-50 w-full pb-3 p  rounded-lg flex flex-col  justify-center items-center gap-y-3 ">
            <h4
                class="py-2 w-full bg-gray-500 rounded text-center font-medium text-slate-50  text-sm leading-[20px] uppercase">
                Jumlah Mahasiswa</h4>
            <h4 class="text-center font-normal text-4xl px-2 py-2 leading-[20px]">
                <?php echo $jumlahmhs ?>
            </h4>
        </div>
        <div class="w-[100%] py-3 flex justify-center gap-x-5 rounded  ">
            <div
                class="hover:shadow-lg bg-gray-50 w-full py-3 px-2  rounded  flex flex-col  justify-center items-center gap-y-3 ">
                <h4 class="text-center font-bold text-3xl leading-[20px]">
                    <?php echo $jumlah_laki ?>
                </h4>
                <h4 class="text-center font-medium text-slate-500  text-sm leading-[20px]">Mahasiswa Laki-Laki</h4>
            </div>
            <div
                class="hover:shadow-lg bg-gray-50 w-full py-3 px-2  rounded  flex flex-col  justify-center items-center gap-y-3 ">
                <h4 class="text-center font-bold text-3xl leading-[20px]">
                    <?php echo $jumlah_perempuan ?>
                </h4>
                <h4 class="text-center font-medium text-slate-500  text-sm leading-[20px]">Mahasiswa Perempuan</h4>
            </div>
        </div>
        <div class="w-full pb-3 px-3 bg-gray-50 rounded">
            <h2 class=" text-center  my-4 font-bold text-lg text-gray-700">Jumlah Mahasiswa Semua Jurusan</h2>
            <div class="w-full grid gap-x-4 gap-y-4 grid-cols-3">
                <card
                    class="hover:shadow-xl bg-blue-600 w-full py-2 text-slate-50  rounded-lg flex flex-col  justify-center items-center gap-y-3 ">
                    <h4
                        class="py-[5px] w-full rounded text-center font-medium  text-base uppercase border-b-2 border-slate-50">
                        Teknik
                    </h4>
                    <div class="flex">
                        <h4 class="uppercase text-start font-normal text-base py-2 leading-[20px]">
                            Informatika <br>
                            Industri <br>
                            Mesin <br>
                            Elektro <br>
                            Arsitek <br>
                        </h4>
                        <h4 class="text-start font-bold text-base px-2 py-2 leading-[20px]">
                            :
                            <?php echo $informatika ?><br>
                            :
                            <?php echo $industri ?><br>
                            :
                            <?php echo $mesin ?><br>
                            :
                            <?php echo $elektro ?><br>
                            :
                            <?php echo $arsitek ?><br>
                        </h4>
                    </div>
                </card>
                <card
                    class="hover:shadow-xl bg-slate-300 w-full py-2 text-gray-700  rounded-lg flex flex-col justify-start items-center ">
                    <h4
                        class="py-[5px] w-full rounded text-center font-medium  text-base uppercase border-b-2 border-slate-50">
                        Ilmu Budaya
                    </h4>
                    <div class="flex">
                        <h4 class="uppercase text-start font-normal text-base py-2 leading-[20px]">
                            S.Inggris <br>
                            S.Jepang <br>
                        </h4>
                        <h4 class="text-start font-bold text-base px-2 py-2 leading-[20px]">
                            :
                            <?php echo $inggris ?><br>
                            :
                            <?php echo $jepang ?><br>
                        </h4>
                    </div>
                </card>
                <card
                    class="hover:shadow-xl bg-red-600 w-full py-2 text-slate-50  rounded-lg flex flex-col justify-start items-center ">
                    <h4
                        class="py-[5px] w-full rounded text-center font-medium  text-base uppercase border-b-2 border-slate-50">
                        Hukum
                    </h4>
                    <div class="flex">
                        <h4 class="uppercase text-start font-normal text-base py-2 leading-[20px]">
                            Hukum <br>

                        </h4>
                        <h4 class="text-start font-bold text-base px-2 py-2 leading-[20px]">
                            :
                            <?php echo $hukum ?><br>
                        </h4>
                    </div>
                </card>
            </div>
        </div>

    </div>

</body>

</html>