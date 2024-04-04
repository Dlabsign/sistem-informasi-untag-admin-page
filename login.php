<!-- <?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Check if username and password match the hardcoded values
    if ($username === 'admin' && $password === 'admin') {
        // If username and password are valid, create session and redirect to dashboard page
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit(); // Make sure to exit after redirection
    } else {
        // If username or password is incorrect, display error message
        $alert = "Username atau password Tidak sesuai ";
    }
}
?> -->
<!DOCTYPE html>
<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <title>Halaman Login</title>
    <!-- <script>
        setTimeout(function () {
            location.reload();
        }, 1000); // Reload setiap 5 detik (5000 milidetik)
    </script> -->

    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>

  <body
    class="bg-slate-300 flex justify-center items-center h-[100vh] w-full border-gray-500 border"
  >
    <img
      src="./assets/image/IMG_20220628_104818.jpg"
      alt=""
      style="
        filter: blur(2px);
        -webkit-filter: blur(2px);
        width: 100%;
        height: 100%;
        object-fit: cover;
      "
    />
    <div
      class="flex flex-col justify-center items-center border-gray-100 border-3 bg-red-600 pb-5 w-[65%] rounded-[20px] shadow-xl absolute"
    >
      <div class="flex items-center justify-center gap-x-3 pt-4 pb-4">
        <img
          src="./assets/image/logo.png"
          alt=""
          class="w-[95px] bg-slate-100 px-2.5 py-2.5 rounded-full"
        />
        <div class="text-slate-50">
          <h2 class="font-bold text-[30px] uppercase">Selamat Datang <br /></h2>
          <div class="font-medium text-sm text-gray-200">
            Sistem informasi untag surabaya
          </div>
        </div>
      </div>
      <form method="post" action="" class="w-[90%] text-slate-50 font-semibold">
        <div class="mb-2">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input
            type="text"
            class="form-control font-semibold border-none py-2 px-2"
            name="username"
            style="
              background: none;
              border-radius: 0px;
              border-bottom: 1px solid white;
              color: white;
            "
          />
        </div>
        <div class="mb-2">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control font-semibold border-none py-2 px-2"
            name="password"
            style="
              background: none;
              border-radius: 0px;
              border-bottom: 1px solid white;
              color: white;
            "
          />
        </div>
        <div class="mb-2">
          <div class="alert alert-danger" role="alert">
            <?php echo isset($alert) ? $alert : ''; ?>
          </div>
        </div>
        <button
          type="submit"
          class="btn btn-warning px-5 w-full font-bold text-gray-50"
          name="login"
        >
          Submit
        </button>
      </form>
      <div class="font-medium text-sm mt-3 text-red-300">
        @ 2024 Daniel. All Right Reserved
      </div>
    </div>
  </body>
</html>
