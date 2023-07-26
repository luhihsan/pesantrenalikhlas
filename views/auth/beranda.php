<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Card Layout</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .dsply2 {
            font-size: 20px;
        }

        .dsply1 {
            font-size: 35px;
            font-weight: normal;
        }

        /* Custom CSS to adjust card layout */
        .card {
            flex: 1;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        /* Custom CSS to set image size */
        .card-img-top {
            width: auto;
            height: 122.5px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .card {
                margin-right: 0;
            }
            
        }
        @keyframes moveLeft {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    /* Terapkan animasi ke elemen #countdown */
    #countdown {
        animation: moveLeft 10s linear infinite; /* Mengubah durasi menjadi 10 detik dan infinite untuk bergerak terus-menerus */
        margin-top: 30px;
        color: #fff;
        color: red; /* Mengatur warna teks menjadi merah */
        text-shadow: 1px 1px 1px #000; /* Menambahkan shadow teks agar lebih jelas */
        overflow: hidden; /* Membuat border tidak terputus */
        white-space: nowrap; /* Agar teks tidak pindah baris */
        /* border: 2px solid red; Mengatur border merah */
        border-radius: 5px; /* Mengatur radius border */
    }
        
    </style>
</head>

<body>
    <div class="jumbotron">
        
        <div class="container text-center mb-2">
            <h1 style="color:#909294" class="dsply2 display-3">PENDAFTARAN CALON PELAJAR <br></h1>
            <h1 style="color:#0092E4" class="dsply1 display-3">MADRASAH MTS AL IKHLAS BERBAH</h1>
            <h1 style="color:#909294" class="dsply2 display-3">Pondok Pesantren Modern di Yogyakarta <br></h1>
        </div><br><br>

        <div class="container mt-4">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="../../assets/img/grup hadroh.jpg" class="card-img-top" alt="">
                        <div class="card-body d-flex flex-column gap-3">
                            <div class="brand text-center">
                                <p class="title mb-0 mt-2"><b>Lengkapi Berkas</b></p>
                            </div>
                            <div class="description text-center" style="color:#909294">
                                Lengkapi akun anda untuk melanjutkan ke pendaftaran
                            </div>
                            <div class="d-block text-center mt-auto"><br>
                                <a class="btn btn-sm btn-primary px-3" href="?login">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="../../assets/img/santridipesantren.jpg" class="card-img-top" alt="">
                        <div class="card-body d-flex flex-column gap-3">
                            <div class="brand text-center">
                                <p class="title mb-0 mt-2"><b>Pendaftaran Calon Pelajar</b></p>
                            </div>
                            <div class="description text-center" style="color:#909294">
                               Daftarkan diri anda di form berikut ini
                            </div>
                            <div class="d-block text-center mt-auto"><br>
                                <a class="btn btn-sm btn-primary px-3" href="?login">Login</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="../../assets/img/bgsantren.jpg" class="card-img-top" alt="">
                        <div class="card-body d-flex flex-column gap-3">
                            <div class="brand text-center">
                                <p class="title mb-0 mt-2"><b>Tutorial</b></p>
                            </div>
                            <div class="description text-center" style="color:#909294">
                                Pelajari tutorial untuk mendaftar menjadi siswa
                            </div>
                            <div class="d-block text-center mt-auto"><br>
                                <a class="btn btn-sm btn-primary px-3" href="site/login">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="../../assets/img/halamandepanpesantren.jpg" class="card-img-top" alt="">
                        <div class="card-body d-flex flex-column gap-3">
                            <div class="brand text-center">
                                <p class="title mb-0 mt-2"><b>Bantuan</b></p>
                            </div>
                            <div class="description text-center" style="color:#909294">
                            Butuh bantuan? hubungi kami di sini
                            </div>
                            <div class="d-block text-center mt-auto"><br>
                                <a class="btn btn-sm btn-primary px-3" href="site/login">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional, if you need to use Bootstrap's JavaScript features) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>