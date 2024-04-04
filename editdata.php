
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="dash px-[20px] py-10 bg-slate-400 ">
        <h2 class="font-bold text-[45px] rounded-md mb-6 text-center py-5   bg-slate-600 text-slate-100">Edit Data
            Mahasiswa</h2>
        <div class="card py-[52px] px-[42px]   bg-gray-200">
            <form class="pb-3" method="POST"
                action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?nim=" . $nim); ?>">
                <!-- Nama Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Nama Mahasiswa</h6>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
                <!-- Jenis Kelamin -->
                <div class="mb-4 drop-shadow">
                    <h6>Jenis Kelamin</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" value="L" <?php if ($kelamin == 'L')
                            echo 'checked'; ?>>
                        <label class="form-check-label">
                            Laki-Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" value="P" <?php if ($kelamin == 'P')
                            echo 'checked'; ?>>
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
                        <option value="single" <?php if ($status == 'single')
                            echo 'selected'; ?>>single</option>
                        <option value="menikah" <?php if ($status == 'menikah')
                            echo 'selected'; ?>>menikah</option>
                        <option value="bekerja" <?php if ($status == 'bekerja')
                            echo 'selected'; ?>>bekerja</option>
                        <option value="duda" <?php if ($status == 'duda')
                            echo 'selected'; ?>>duda</option>
                    </select>
                </div>
                <!-- Tgl Lahir -->
                <div class="mb-4 drop-shadow">
                    <h6>Tgl Lahir</h6>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
                </div>
                <!-- Jurusan Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Jurusan Mahasiswa</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="jurusan">
                        <option class="fw-bold" disabled selected>- Pilih - </option>
                        <option class="fw-bold" disabled>- Teknik - </option>
                        <option class="capitalize" value="informatika" <?php if ($jurusan == 'informatika')
                            echo 'selected'; ?>>informatika</option>
                        <option class="capitalize" value="industri" <?php if ($jurusan == 'industri')
                            echo 'selected'; ?>>
                            industri</option>
                        <option class="capitalize" value="mesin" <?php if ($jurusan == 'mesin')
                            echo 'selected'; ?>>mesin
                        </option>
                        <option class="capitalize" value="elektro" <?php if ($jurusan == 'elektro')
                            echo 'selected'; ?>>
                            elektro</option>
                        <option class="capitalize" value="arsitek" <?php if ($jurusan == 'arsitek')
                            echo 'selected'; ?>>
                            arsitek</option>
                        <option class="fw-bold" disabled>- Budaya - </option>
                        <option class="capitalize" value="inggris" <?php if ($jurusan == 'inggris')
                            echo 'selected'; ?>>S.
                            Inggris</option>
                        <option class="capitalize" value="jepang" <?php if ($jurusan == 'jepang')
                            echo 'selected'; ?>>S.
                            Jepang</option>
                        <option class="fw-bold" disabled>- Hukum- </option>
                        <option class="capitalize" value="hukum" <?php if ($jurusan == 'hukum')
                            echo 'selected'; ?>>Hukum
                        </option>
                    </select>
                </div>
                <!-- Asal Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Asal Sekolah</h6>
                    <select class="form-select mb-3" aria-label="Default select example" name="asal_sekolah">
                        <option class="fw-bold" disabled selected>Pilih</option>
                        <option value="SMK" <?php if ($asal_sekolah == 'SMK')
                            echo 'selected'; ?>>SMK</option>
                        <option value="SMA" <?php if ($asal_sekolah == 'SMA')
                            echo 'selected'; ?>>SMA</option>
                    </select>
                </div>
                <!-- Pekejerjaan Mahasiswa -->
                <div class="mb-4 drop-shadow">
                    <h6>Pekerjaan</h6>
                    <input type="text" class="form-control" name="pekerjaan" value="<?php echo $pekerjaan; ?>">
                </div>
                <!-- Alamat Mahasiswa -->
                <div class="row g-3 mb-3">
                    <div class="col drop-shadow">
                        <h6>Alamat</h6>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>">
                    </div>
                    <div class="col drop-shadow">
                        <h6>kota</h6>
                        <input type="text" class="form-control" name="kota" value="<?php echo $kota; ?>">
                    </div>
                    <div class="col drop-shadow">
                        <h6>provinsi</h6>
                        <input type="text" class="form-control" name="provinsi" value="<?php echo $provinsi; ?>">
                    </div>
                </div>
                <div class="mb-3 drop-shadow">
                    <h6>Telepon</h6>
                    <input type="text" class="form-control" name="telepon" value="<?php echo $telepon; ?>">
                </div>
                <div class="mb-3 drop-shadow">
                    <h6>Email</h6>
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="w-full">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
                    <a href="menu.php" type="kembali"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>