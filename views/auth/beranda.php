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
            <h1 style="color:#909294" class="dsply2 display-4">PENDAFTARAN CALON PELAJAR</h1>
            <h1 style="color:#0092E4" class="dsply1 display-3">MADRASAH MTS AL IKHLAS</h1>
            <h1 style="color:#909294" class="dsply2 display-4">Pondok Pesantren Modern di Yogyakarta</h1>
        </div><br><br>

        <div class="container mt-4">
            <div class="row justify-content-center">
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
                                <a class="btn btn-sm btn-primary px-3" href="tutorial_aut.php">Selengkapnya</a>
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
                                <a class="btn btn-sm btn-primary px-3" href="?login">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

        <hr>

        <div class="container p-3 ">
        <div class="row justify-content-center">

            <div class="col-md-10 text-center">
                <h3 class="ml-3 mr-3">Tentang Pondok Pesantren</h3>
                <p class="ml-4 mr-4 text-justify ">Pondok Pesantren Al-Ikhlas Jogja merupakan lembaga pendidikan Islam yang bertujuan untuk memberikan pendidikan dan pembinaan kepada para santri dalam hal pengetahuan agama, akhlak, serta keterampilan hidup. Dengan mengutamakan nilai-nilai keagamaan, pesantren ini berkomitmen untuk mencetak generasi muda yang berkualitas, berakhlak mulia, dan memiliki wawasan lingkungan.</p>  
            </div>
            
        </div>
            

    </div>
<hr>
<div class="container p-3 ">
        <div class="row justify-content-center">

            <div class="col-md-8 img-fluid" alt="Responsive image">
                <div class="embed-responsive embed-responsive-16by9 ">
                    <iframe class="embed-responsive-item " src="https://www.youtube.com/embed/MC03etv-rYQ" allowfullscreen></iframe>
                </div>
            </div>
            
        </div>
            

    </div>


        </div> <!-- /container -->

        <hr>

        <div class="container p-3">
    <h2 class="text-center">Program Pesantren</h2>
    <div class="row">
        <div class="col text-right">
            <h5>Tahfizul Quran</h5>
            <h5>Studi Agama Islam</h5>
            <h5>Ilmu Bahasa Arab</h5>
        </div>
        <div class="col-1 text-center">
            <h5>o</h5>
            <h5>o</h5>
            <h5>o</h5>
            <h5>o</h5>
        </div>
        <div class="col">
            <h5>Studi Al-Quran dan Hadis</h5>
            <h5>Ilmu Fiqih dan Ushul Fiqih</h5>
            <h5>Tafsir dan Ulumul Quran</h5>
            <h5>Aqidah dan Akhlak</h5>
        </div>
    </div>
</div>


        <hr>

        <div class="container p-3">
            <div class="row">
                <div class="col-md-8">
                    <h4>Galeri Pesantren</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../../assets/img/Pengasuhpesantren.jpg" alt="" class="img-fluid mb-3">
                        </div>
                        <div class="col-md-6">
                            <img src="../../assets/img/halamandepanpesantren.jpg" alt="" class="img-fluid mb-3">
                        </div>
                        <div class="col-md-12">
                            <img src="../../assets/img/santridipesantren.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>Kegiatan rutin baca Al-Quran di pesantren Al-ikhlas</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>Tahfidz quran pesantren Al-ikhlas</h6>
                        </div>
                    </div>
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h6>Pelaksanaan uji kompetensi keahllian tahun ajaran 2023/2024</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Bootstrap JS (Optional, if you need to use Bootstrap's JavaScript features) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
