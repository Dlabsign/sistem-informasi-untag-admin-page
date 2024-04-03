<?php
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
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Halaman Login</title>
    <!-- <script>
        setTimeout(function () {
            location.reload();
        }, 1000); // Reload setiap 5 detik (5000 milidetik)
    </script> -->

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="card-container">
            <h2>SISTEM INFORMASI</h2>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3 ">
                    <div class="alert alert-danger" role="alert">
                        <?php echo isset($alert) ? $alert : ''; ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-5" name="login">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>