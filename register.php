<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    include "config/koneksi.php";

    $sql = mysqli_query($koneksi, "SELECT * FROM identitas");
    $row1 = mysqli_fetch_assoc($sql);
    ?>
    <title>Pendaftaran | <?= $row1['nama_app']; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
    <!-- Icon -->
    <link rel="icon" type="icon" href="assets/dist/img/logo_vers2.png">
    <!-- Custom -->
    <link rel="stylesheet" href="assets/dist/css/custom.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="assets/dist/css/toastr.min.css">
</head>

<!-- Tombol contact me -->
<body>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me Button</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

       
        .contact-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 65px;
            height: 65px;
            background-color: #4CAF50;
            color: white;
            border-radius: 50%;
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-btn:hover {
            background-color: #45a049;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .contact-btn:active {
            background-color: #3e8e41;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        /* Optional: Hide on small screens */
        @media (max-width: 600px) {
            .contact-btn {
                width: 50px;
                height: 50px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    <a href="https://wa.me/6281290246160" class="contact-btn">💬</a>

</body>

<body style="background-image: url('assets/dist/img/perpustakaan.png'); background-size: cover;"
     class="hold-transition login-page" style="font-family: 'Quicksand', sans-serif;">
    <div class="login-box">
        <div class="login-logo">
            <a href="masuk" style="color:white"><b><?= $row1['nama_app']; ?></b></a>
            <marquee behavior="right" style="font-size: 20px; color: white;" direction="scorll">Aplikasi Pustaka Pinjam SMK 1 TRIPLE J</marquee>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body" style="border-radius: 10px;">
            <img src="assets/dist/img/logo_vers2.png" height="180px" width="180px" style="display: block; margin-left: auto; margin-right: auto; margin-top: -12px; margin-bottom: 5px;">

            <form name="formLogin" action="function/Process.php?aksi=daftar" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="funame" placeholder="Nama Lengkap" id="funame">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="uname" placeholder="Nama Pengguna" id="uname">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="passw" placeholder="Kata Sandi" id="passw">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar Sekarang</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p style="font-size: 11px;">- ATAU -</p>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="button" onclick="Masuk()" class="btn btn-block btn-success btn-flat"><i class="fa fa-sign-in"></i> Sudah mempunyai akun ? Masuk</button>
                    </div>
                </div>
            </div>

            

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Fungsi mengarahkan kehalaman masuk -->
    <script>
        function Masuk() {
            window.location.href = "masuk";
        }
    </script>
    <!-- Toastr -->
    <script src="assets/dist/js/toastr.min.js"></script>
    <!-- -->
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    <!-- -->
    <script>
        function validateForm() {
            if (document.forms["formLogin"]["funame"].value == "") {
                toastr.error("Nama Lengkap harus diisi !!");
                document.forms["formLogin"]["funame"].focus()
                return false;
            }
            if (document.forms["formLogin"]["uname"].value == "") {
                toastr.error("Nama Pengguna harus diisi !!");
                document.forms["formLogin"]["uname"].focus();
                return false;
            }
            if (document.forms["formLogin"]["passw"].value == "") {
                toastr.error("Kata Sandi harus diisi !!");
                document.forms["formLogin"]["passw"].focus();
                return false;
            }
        }
    </script>
</body>

</html>
