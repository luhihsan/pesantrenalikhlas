<body>
<div class="jumbotron">
    <div class="container text-center">
        <h1 class="display-4 text-white">Selamat Datang<br>Di Admin Page Pesantren Al-Ikhlas</h1>
        <p class="lead text-white">Sekolah berkualitas, berkarakter, dan berwawasan lingkungan.</p>
    </div>
</div>

<div class="container text-center py-5 my-5">
    <div class="row justify-content-center">
        <div class="col-md-9 mb-4">
            <div class="card-deck p-3">
                <div class="card">
                    <img src="../../assets/img/monitoring.jpg" class="card-img-top" alt="" width="300" height="200">
                    <div class="card-body d-flex flex-column ">
                        <div class="brand text-center">
                            <p class="title mb-0 m-2"><b>Monitoring Pendaftaran Calon Santri</b></p>
                        </div>
                        <div class="description text-center" style="color:#909294">
                            Lakukan Monitoring dan Proses Seleksi Calon Santri Melalui Portal Ini
                        </div>
                        <div class="d-block text-center m-2">
                            <a class="btn btn-sm btn-primary px-3" href="?monitoring">Monitoring</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="../../assets/img/bantuan.jpg" class="card-img-top" alt="" width="300" height="200">
                    <div class="card-body d-flex flex-column ">
                        <div class="brand text-center">
                            <p class="title mb-0 m-2"><b>Portal Bantuan Pendaftaran Calon Santri</b></p>
                        </div>
                        <div class="description text-center" style="color:#909294">
                            Lakukan Monitoring dan Jawab Pertanyaan Dari Calon Santri Dari Portal Ini
                        </div>
                        <div class="d-block text-center m-2">
                            <a class="btn btn-sm btn-primary px-3" href="?pengaturan">Jawab Pertanyaan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
            
        
    </div>
</div>

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

            
        <div class="container p-3">
            <h2 class="text-center">Program Pesantren</h2>
            <div class="row justify-content-center">
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
    <h4 class="text-center">Galeri Pesantren</h4>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <img src="../../assets/img/Pengasuhpesantren.jpg" class="img-fluid" alt="Responsive image" >
            <br>
            <img src="../../assets/img/halamandepanpesantren.jpg" class="img-fluid" alt="Responsive image" >
            <br>
            <img src="../../assets/img/santridipesantren.jpg" class="img-fluid" alt="Responsive image" >
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
<?php
        include "../../controller/connect.php";
        $query = mysqli_query($connect, "SELECT * FROM countdown");
        $data = mysqli_fetch_array($query);
        $tgl = $data['tanggal'];
        $tgl = date("m/d/Y", strtotime($tgl));
    ?>
<script type="text/javascript">

    var target = new Date("<?= $tgl ?>").getTime();

    var hari, jam, menit, detik;

    var countdown = document.getElementById("countdown");

    setInterval(function () {

    var sekarang = new Date().getTime();
    var sisa = (target - sekarang) / 1000;

    hari = parseInt(sisa / 86400);
    sisa = sisa % 86400;
    jam = parseInt(sisa / 3600);
    sisa = sisa % 3600;
    menit = parseInt(sisa / 60);
    detik = parseInt(sisa % 60);

    countdown.innerHTML = "<h1> Ayo segera daftar</h1><h1 class='d-inline'>"+hari+" hari </h1><h1 class='d-inline'>"+jam+" jam </h1><h1 class='d-inline'>"+menit+" menit </h1><h1 class='d-inline mt-5'>"+detik+" detik</h1>";
    }, 1000);

</script>