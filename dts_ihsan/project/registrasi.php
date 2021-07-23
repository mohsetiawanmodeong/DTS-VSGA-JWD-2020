<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script> 
        alert('user baru ditambahkan') 
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="image/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorr/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontss/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontss/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorr/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorr/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorr/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorr/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendorr/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="csss/util.css">
    <link rel="stylesheet" type="text/css" href="csss/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" action="" method="post">
                    <span class="login100-form-title p-b-33">
                        Registrasi
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="username" placeholder="Username" autocomplete="off">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password" autocomplete="off">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password2" placeholder="Konfirmasi Password" autocomplete="off">
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn" name="register" type="submit">
                            Sign in
                        </button>
                    </div>


                    <div class="text-center p-t-45 p-b-4">
                        <span class="txt1">
                            Kembali
                        </span>

                        <a href="login.php" class="txt2 hov1">
                            Halaman Login
                        </a>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>



    <!--===============================================================================================-->
    <script src="vendorr/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/bootstrap/js/popper.js"></script>
    <script src="vendorr/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/daterangepicker/moment.min.js"></script>
    <script src="vendorr/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendorr/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="jss/main.js"></script>

</body>

</html>