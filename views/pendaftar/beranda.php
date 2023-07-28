<style>
    .dsply2 {
        font-size : 20px;
    }
    .dsply1 {
        font-size : 35px;
        font-weight: normal;
    }
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

   
</style>

<!-- Main jumbotron for a primary marketing message or call to action -->
<body>
    
    <div class="jumbotron">
        
        <div class="container text-center mb-2 mt-3">
            <h1 style="color:#909294" class="dsply2 display-3">PENDAFTARAN CALON PELAJAR <br></h1>
            <h1 style="color:#0092E4" class="dsply1 display-3">MADRASAH MTS AL IKHLAS BERBAH</h1>
            <h1 style="color:#909294" class="dsply2 display-3">Pondok Pesantren Modern di Yogyakarta <br></h1>
        </div><br><br>

        <div class="container mt-4">
            <div class="row align-items-center">

                <!-- Card 2 -->
                <div class="col-md">
                    <div class="card">
                        <img src="../../assets/img/santridipesantren.jpg" class="card-img-top" alt="" >
                        <div class="card-body d-flex flex-column gap-3">
                            <div class="brand text-center">
                                <p class="title mb-0 mt-2"><b>Pendaftaran Calon Pelajar</b></p>
                            </div>
                            <div class="description text-center" style="color:#909294">
                               Daftarkan diri anda di form berikut ini
                            </div>
                            <div class="d-block text-center mt-auto"><br>
                                <a class="btn btn-sm btn-primary px-3" href="?pendaftaranawal">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md">
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
                                <a class="btn btn-sm btn-primary px-3" href="../pendaftar/tutorial.php">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md">
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
                                <a class="btn btn-sm btn-primary px-3" href="bantuan.php">Selengkapnya</a>
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

