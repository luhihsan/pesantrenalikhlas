<?php

    session_start();
    include "../../controller/connect.php";
    $query = mysqli_query($connect, "SELECT * FROM countdown");
    $data = mysqli_fetch_array($query);
    $data['tanggal'];
    // if ($_SESSION['login'] != 'true') {
    //     header('location:../auth/login.php');
    // } elseif ($data['tanggal'] == date('Y-m-d')) {
    //     header('location:tutup.php');
    // }

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
        .jumbotron {
            background-color: #f6f8fc;
         
        }

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
                        <a class="nav-link" href="?beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tutorial_aut.php">Tutorial</a>
                    </li>
                </ul>
            </div>
            <hr class="mx-2 m-0" style="height:20px; border: 1px solid rgba(0, 0, 0, 0.2)">
            <div class="dropdown">
            <a class="btn btn-white" href="../auth/?register">Buat Akun</a>
                <a class="btn btn-white dropdown-toggle" href="" role="button" data-toggle="dropdown">Login</a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="../auth/?login"><i class="fa fa-user mr-2"></i>Login</a>
                    <a class="dropdown-item" href="../auth/?login-admin"><i class="fa fa-user mr-2"></i>Login As Admin</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CONTENT -->
    <main role="main" style="min-height:400px">
        <?php

if (isset($_GET['beranda'])) {
    include "beranda.php";
} elseif (isset($_GET['pendaftaran'])) {
    // Logika atau aksi untuk halaman "Pendaftaran"
    $id = $_SESSION['id'];
    $nama = $_SESSION['nama'];
    $cekblacklist = mysqli_query($connect, "SELECT * FROM blacklist WHERE id_user='$id' AND nama='$nama'");
    $data = mysqli_fetch_array($cekblacklist);
    $cekstatus = mysqli_query($connect, "SELECT * FROM pendaftar WHERE id='$id'");
    $data2 = mysqli_fetch_array($cekstatus);
    $cekid = mysqli_query($connect, "SELECT * FROM user WHERE id='$id'");
    $data3 = mysqli_fetch_array($cekid);

    if ($data && $data > 0) {
        include "blacklist.php";
    } elseif ($data2 && $data2['status'] == '1') {
        include "sudahdaftar.php";
    } elseif ($data2 && $data2['status'] == '0') {
        include "menunggu.php";
    } else {
        include "pendaftaran.php";
    }
} elseif (isset($_GET['pendaftaranawal'])) {
    $id = $_SESSION['id'];
    $cekstatus = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE id='$id'");
    $data2awal = mysqli_fetch_array($cekstatus);

    if ($data2awal && $data2awal['status'] == '1') {
        include "sudahdaftar.php";
    }else {
        include "pendaftaranawal.php";
    }
} elseif (isset($_GET['daftarsiswa'])) {
    // Logika atau aksi untuk halaman "Pemeringkatan"
    $id = $_SESSION['id'];
    $cekstatus = mysqli_query($connect, "SELECT * FROM pendaftar WHERE id='$id'");
    $data = mysqli_fetch_array($cekstatus);
    if ($data < 1) {
        include "belumdaftar.php";
    } elseif ($data['status'] == '0') {
        include "menunggu.php";
    } elseif ($data['status'] == '1') {
        include "daftarsiswa.php";
    }
} elseif (isset($_GET['profil'])) {
    $id = $_SESSION['id'];
    $cekstatus = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE id='$id'");
    $data3awal = mysqli_fetch_array($cekstatus);
    
    if ($data3awal && isset($data3awal['status']) && $data3awal['status'] == '1') {
        include "profile.php";
    } else {
        include "notsetprofile.php";
    }
}elseif (isset($_GET['login'])) {
    
        include "login.php";
}elseif (isset($_GET['login-admin'])) {
    
    include "login-admin.php";
    
}elseif (isset($_GET['register'])) {
    
    include "register.php";
    
} else {
    // Jika tidak ada parameter yang sesuai, maka muat halaman "Beranda" sebagai halaman default.
    include "beranda.php";
}

        ?>
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
                    <a href="https://goo.gl/maps/ZKVn3DQBXtZuk9Sq7" class="text-light">Bulu, Jogotirto, Kec. Berbah, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55573</a>
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