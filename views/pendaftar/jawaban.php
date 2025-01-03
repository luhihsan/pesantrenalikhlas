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
                        <a class="nav-link " href="../pendaftar">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pendaftar/tutorial.php">Tutorial</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="../pendaftar/?bantuan">Bantuan</a>
                    </li>
                </ul>
            </div>
            <hr class="mx-2 m-0" style="height:20px; border: 1px solid rgba(0, 0, 0, 0.2)">
            <div class="dropdown">
                <a class="btn btn-white dropdown-toggle" href="" role="button" data-toggle="dropdown"><?= $_SESSION['nama'] ?></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="../pendaftar/?profil"><i class="fa fa-user mr-2"></i>Profil</a>
                    <a class="dropdown-item" href="../../views/auth/"><i class="fa fa-sign-out-alt mr-2"></i>Keluar</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- START CONTENT -->
    <main role="main" style="min-height:400px">
    <div class="container py-5 h-100">
      <div class="row  justify-content-center  h-100">
        

      <?php
      $id = $_SESSION['id'];
      $id_jawab = $_GET['jawab'];
      $jawab = mysqli_query($connect, "SELECT * FROM bantuan WHERE id_bantuan = '$id_jawab' ");
      $data = mysqli_fetch_assoc($jawab);
      
      ?>
      
        <div class="col-lg-10 col-xl-8">
          <div class="card" style="border-radius: 10px;">
                <div class="card-body pl-4 pt-4 pb-2"> 
                    <h4>
                        <?php
                        echo $data['judul'];
                        ?>
                    </h4> 
                </div>
                <div class="card-body pl-4 pt-1"> 
                        <?php
                        if ($data['jawaban'] !== "") {
                            ?>
                            <h5>Pertanyaan</h5>
                            <?php
                            echo $data['pertanyaan'];
                            ?>
                            <br>
                            <br>
                            <h5>Jawaban</h5>
                            <?php
                            echo $data['jawaban'];
                        } else {
                            echo "Pertanyaan masih menunggu respon dari admin";
                        }
                        ?> 

                </div>
                
            
            </div>
        </div>


        <div class="col-lg-3">
            <div class="card p-2" style="border-radius: 10px;">
                <div class="card-body p-2"> 
                    <h5>
                        History
                    </h5> 
                </div>
                
                <div class="card-body pl-2 pt-1"> 
                    <?php
                    $id = $_SESSION['id'];
                    $i = 0;
                    $query = mysqli_query($connect, "SELECT * FROM bantuan WHERE id_user = '$id' ");

                    foreach ($query as $data) :
                    ?>
                        <div>
                            <a href="jawaban.php?jawab=<?= urlencode($data['id_bantuan']) ?>" target="_blank">
                                <?= $data['judul']; ?>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>

            </div>
        </div>
        
    </div>
</div>
        
            
            
    
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