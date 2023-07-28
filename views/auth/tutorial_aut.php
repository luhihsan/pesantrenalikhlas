<?php

    session_start();
    include "../../controller/connect.php";
    $query = mysqli_query($connect, "SELECT * FROM countdown");
    $data = mysqli_fetch_array($query);
    $data['tanggal'];
    if ($_SESSION['login'] != 'true') {
        header('location:../auth/login.php');
    } elseif ($data['tanggal'] == date('Y-m-d')) {
        header('location:tutup.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran siswa baru</title>
    <link rel="icon" type="image/png" href="../../assets/img/logo.png">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <style>
        /* .jumbotron {
            background-image: url("../../assets/img/masjid1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: -150px;
            background-attachment: fixed;
        } */

        /* nav {
            position: relative;
            z-index: 1;
        }

        .jumbotron::after {
            content: "";
            display: block;
            height: 420px;
            width: 100%;
            background: linear-gradient(to top, black, rgba(0, 0, 0, 0));
            position: absolute;
            top: 0;
            left: 0;
        } */

        @media (max-width:768px) {
            .jumbotron {
                background-position-y: -245px;
            }

            .container .row div {
                text-align: center !important;
                margin-bottom: 20px;
            }
        }

        .btn-primary {
            box-shadow: 0 18px 40px -12px #007bff;
        }

        .btn-warning {
            box-shadow: 0 18px 40px -12px #ffc107;
        }

        .btn-secondary {
            box-shadow: 0 18px 40px -12px #6c757d;
        }

        .btn-danger {
            box-shadow: 0 18px 40px -12px #dc3545;
        }
    </style>
</head>

<body>

    <!-- START NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 shadow" style="width:100%">
        <div class="container">
            <a class="navbar-brand" href="https://www.instagram.com/alberderryy/">
                <img src="../../assets/img/uii.png" width="30" height="30" alt="logosmk">
                <span class="align-middle">Pesantren created by derry</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../auth">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Tutorial</a>
                </ul>
            </div>
            <hr class="mx-2 m-0" style="height:20px; border: 1px solid rgba(0, 0, 0, 0.2)">
            <div class="dropdown">
            <a class="btn btn-white" href="?register">Buat Akun</a>
                <a class="btn btn-white dropdown-toggle" href="" role="button" data-toggle="dropdown">Login</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="?login"><i class="fa fa-user mr-2"></i>Login</a>
                    <a class="dropdown-item" href="?login-admin"><i class="fa fa-user mr-2"></i>Login As Admin</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CONTENT -->
    <main role="main" style="min-height:400px">
    <main role="main" class="flex-shrink-0">
        <div class="container">

            
<div class="tutorial-index">

<br>
    <h3>Tutorials</h3>


    <div class="row tutorial-index-links">
        <div class="col-lg-10">

            <ul class="fw-semibold">
                <li>
                    <a href="#account">Akun</a>
                    <ul class="fw-normal ">
                        <li>
                            <a href="#signup">Buat Akun</a>
                        </li>
                        <li>
                            <a href="#login">Login</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pendaftaran">Pendaftaran Calon Santri</a>
                    <ul class="fw-normal ">
                        <li>
                            <a href="#langkah">Langkah Pendaftaran</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#help">Bantuan</a>
                </li>
            </ul>

            <p></p>

            <h4 id="account">
                <a href="#account">Akun</a>
            </h4>
            <p class="ps-4">
                Akun atau Akun Pendaftaradalah akun yang digunakan untuk mendaftarkan Calon Pelajar di Website Pendaftaran.            </p>
            <h5 id="signup">
                <a href="#signup">Buat Akun</a>
            </h5>
            <p class="ps-5 mb-0">Untuk bisa masuk ke Website Pendaftaran, Pendaftar diharuskan untuk membuat akun di
                Website Pendaftaran.
            </p>
            <p class="ps-5 my-2">Membuat Akun:</p>
            <div class="create-account ps-5">
                <p class="mb-1">Setelah masuk ke halaman awal web. User akan melakukan pendaftaran dengan memilih menu membuat akun disamping "Login"</p>
                <img src= "../../assets/img/awal_reg.png" class="mb-1">
                <p class="mb-1">Setelah masuk ke halaman buat akun, user akan diminta mengisikan data yang diperlukan untuk membuat akun.</p>
                <img src= "../../assets/img/tutor_reg.png" class="mb-1">
                <p class="mb-1">Setelah mengisikan data yang diperlukan, user dapat klik tombol registrasi.</p>
                <p class="mb-1">Jika registrasi sukses maka akan muncul notifikasi "Registrasi Sukses" dan secara otomatis akan kembali ke halaman login</p>
            </div>
            <h5 id="login">
                <a href="#login">Login</a>
            </h5>
            <p class="ps-5">User memasukan data email dan password sesuai dengan yang di registrasikan</p>
            <img src= "../../assets/img/login.png" class="mb-1">
            <p class="ps-5">Jika login sukses maka akan muncul notifikasi "Login Sukses" dan user akan secara otomatis masuk ke halaman utama</p>

            <h5 id="pendaftaran">
                <a href="#Pendaftaran">Pendaftaran Calon Santri</a>
            </h5>
            <p class="ps-5">Setelah berhasil login maka user akan berada pada halaman utama pendaftaran. Selanjutnya user akan memilih menu pendaftaran yang ada di sebelah kiri.</p>
            <img src= "../../assets/img/step1.png" class="mb-1">
            <p class="ps-5">User akan masuk ke halaman pendaftaran untuk mengisikan data yang diperlukan untuk mendaftar sebagai calon santri.</p>
            <img src= "../../assets/img/form_daftar.png" class="mb-1">
            <p class="ps-5">Setelah selesai mengisikan data yang diperlukan, user melakukan pendaftaran dengan klik pada tombol "Daftar" yang ada dibawah halaman pendafataran.</p>
            <img src= "../../assets/img/confirm_daftar.png" class="mb-1">
            <p class="ps-5">notifikasi "Sukses Mendaftar" akan muncul jika pendaftaran berhasil. User dapat kembali ke halaman awal dan menunggu konfirmasi penerimaan dari admin.</p>


            <h4 id="help">
                <a href="#help">Bantuan</a>
            </h4>
            <p class="ps-4">Jika anda memerlukan bantuan terkait pendaftaran dan hal lainnya yang berhubungan dengan peneriamaan calon santri</p>
            <p class="ps-4">Anda dapat menguhubungi kami dengan mengisikan deskirpsi masalah anda pada menu bantuan yang tersedia di halaman utama</p>
            <img src= "../../assets/img/menu_bantuan.png" class="mb-1">
            <p class="ps-4">Pada halaman ini anda dapat menuliskan deskripsi masalah yang dihadapi dan dapat melampirkan berkas atau foto sebagai bagian dari deskripsi masalah yang ada.</p>
            <img src= "../../assets/img/form_bantuan.png" class="mb-1">
            <p class="ps-4">Setelah mengisikan deskripsi masalah yang anda miliki. Klik tombol "Submit."</p>
            <p class="ps-4">Selanjutnya tunggulah admin kami untuk membantu menjawab masalah yang anda hadapi.</p>

        </div>
    </div>
</div>

        </div>
    </main>
    </main>
    <!-- END CONTENT -->

    <!-- START FOOTER -->
    <footer class="bg-dark">
        <div class="container text-light">
            <div class="row p-4">
                <div class="col text-center">
                    <h4>CONTACT</h4>
                    <div>
                        <p class="m-2"><i class="fa fa-envelope mr-2"></i>alberdr19@gmail.com</p>
                        <p class="m-2"><i class="fa fa-phone mr-2"></i>0895618458957</p>
                        <p class="m-2"><i class="fa fa-fax mr-2"></i>0895618458957</p>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/smkn1bantul/" class="text-light mx-1"><i
                                class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://facebook.com" class="text-light mx-1"><i class="fab fa-facebook fa-2x"></i></a>
                    </div>
                </div>
                <div class="col text-center">
                    <h4>ADDRESS</h4>
                    <p> Bulu, Jogotirto, Kec. Berbah, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55573</p>
                </div>
                <div class="col text-center">
                    <h4>NAVIGATE</h4>
                    <ul class="list-unstyled">
                        <li><a href="?beranda" class="text-light">Beranda</a></li>
                        <li><a href="?pendaftaran" class="text-light">Pendaftaran</a></li>
                        <li><a href="?daftarsiswa" class="text-light">Pemeringkatan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>