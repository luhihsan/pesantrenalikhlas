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
                        <a class="nav-link" href="?beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Tutorial</a>
                </ul>
            </div>
            <hr class="mx-2 m-0" style="height:20px; border: 1px solid rgba(0, 0, 0, 0.2)">
            <div class="dropdown">
                <a class="btn btn-white dropdown-toggle" href="" role="button" data-toggle="dropdown"><?= $_SESSION['nama'] ?></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="?profil"><i class="fa fa-user mr-2"></i>Profil</a>
                    <a class="dropdown-item" href="../../views/auth/"><i class="fa fa-sign-out-alt mr-2"></i>Keluar</a>
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
                            <a href="#email-verification">Verifikasi Email</a>
                        </li>
                        <li>
                            <a href="#login">Login</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#application">Aplikasi Pendaftaran Calon Pelajar</a>
                    <ul class="fw-normal ">
                        <li>
                            <a href="#addcapel">Tambah Capel</a>
                        </li>
                        <li>
                            <a href="#status">Status Pendaftaran</a>
                        </li>
                        <li>
                            <a href="#forms-validation">Formulir &amp; Verifikasi</a>
                        </li>
                        <li>
                            <a href="#test-zones">Zona Ujian Masuk</a>
                        </li>
                        <li>
                            <a href="#upload-documents">Unggah Berkas Pendaftaran</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#fees-payment">Biaya &amp; Pembayaran</a>
                    <ul class="fw-normal">
                        <li>
                            <a href="#method">Metode Pembayaran</a>
                        </li>
                        <li>
                            <a href="#when-pay">Kapan Pembayaran Dilakukan?</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#help">Bantuan</a>
                </li>
                <li>
                    <a href="#abroad-student">Calon Pelajar Luar Negeri</a>
                </li>

            </ul>

            <p></p>

            <h4 id="account">
                <a href="#account">Akun</a>
            </h4>
            <p class="ps-4">
                <mark>Akun</mark> atau <mark>Akun Pendaftar</mark> adalah akun yang digunakan untuk mendaftarkan Calon Pelajar di Website Pendaftaran.            </p>
            <h5 id="signup">
                <a href="#signup">Buat Akun</a>
            </h5>
            <p class="ps-5 mb-0">Untuk bisa masuk ke Website Pendaftaran, Pendaftar diharuskan untuk membuat akun di
                Website Pendaftaran. Terdapat 2 cara untuk membuat akun di Website Pendaftaran:
            </p>

            <p class="ps-5 my-2"><u>Cara 1</u>: Membuat Akun:</p>
            <div class="create-account ps-5">
                <span class="pe-2">-</span>
                <p class="mb-1">Gunakan email aktif: Gmail, Yahoo, Outlook atau lainnya.</p>
                <span class="pe-2">-</span>
                <p class="mb-1">Setelah mendaftarkan email, lakukan <span class="text-danger">verifikasi
                        email</span>. Buka kotak masuk email dan klik pada link verifikasi yang diterima.</p>
                <span class="pe-2">-</span>
                <p class="mb-1">Link verifikasi email
                    hanya dapat di klik satu kali, setelah itu pendaftar akun langsung menuju website pendaftaran
                    online.</p>
            </div>
            <p class="ps-5 my-2"><u>Atau cara 2</u>: <abbr title="Single Sign On">SSO</abbr> Gmail:</p>
            <div class="create-account ps-5">
                <span class="pe-2">-</span>
                <p class="mb-1">Login menggunakan Gmail dengan mengklik tombol <button class="btn btn-sm btn-outline-danger fs-12">Login with Google</button> yang ada pada bagian
                    bawah
                    kanan
                    form
                    login.
                </p>
            </div>

            <h5 id="email-verification">
                <a href="#email-verification">Verifikasi Email</a>
            </h5>
            <p class="ps-5">Tahap Verifikasi Email dilakukan setelah membuat akun pendaftaran. Pendaftar tidak dapat
                masuk ke Website Pendaftaran sebelum memverifikasi email.</p>
            <h5 id="login">
                <a href="#login">Login</a>
            </h5>
            <p class="ps-5">
                Masuk ke Website Pendaftaran dengan email dan password yang sudah didaftarkan sebelumnya.            </p>
            <p class="ps-5">
                Atau...            </p>
            <p class="ps-5">
                Login menggunakan Gmail dengan mengklik tombol  <button class="btn btn-sm btn-outline-danger fs-12">Login with Google</button>  yang ada pada
                    bagian bawah
                    kanan form login.            </p>
            <div class="ps-5">
                <img src="/img/sso-gmail.png" width="250" alt="">
            </div>

            <div class="catatan fs-14 ps-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="alert alert-warning" role="alert">
                            <div>Note:</div>
                            <ul>
                                <li>Jika membuat akun dengan metode <span class="text-danger">SSO Gmail</span> , untuk seterusnya Pendaftar disarankan login dengan metode tersebut dengan mengklik <button class="btn btn-sm btn-outline-danger fs-12">Login with Google</button>.                                </li>
                                <li>Jika ingin login dengan form login website (bukan SSO Gmail), pendaftar/pemilik akun yang sebelumnya login dengan <span class="text-danger">SSO Gmail</span> harus melakukan riset password akun pendaftaran terlebih dahulu dan kemudian melakukan mendaftarkan password baru melalui link yang telah dikirimkan ke email pendaftar.                                </li>
                                <li>Pendaftar bertanggungjawab penuh atas keamanan akun masing-masing.                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p></p>

            <h4 id="application">
                <a href="#application">Aplikasi Pendaftaran Calon Pelajar</a>
            </h4>
            <p class="ps-4">
                <mark>Calon Pelajar ( Capel )</mark> ialah mereka yang akan mengikuti Ujian Masuk KMI dan diwajibkan untuk memenuhi seluruh persyaratan yang telah ditentukan.            </p>
            <h5 id="status">
                <a href="#status">Status Pendaftaran</a>
            </h5>
            <p class="ps-5">
                Status Pendaftaran atau Status Verifikasi Data adalah status capel selama pendaftaran online.            </p>
            <div class="forms ps-5">
                <ol>
                    <li class="fw-semibold">Input Data</li>
                    <p class="mb-0">Data sedang dalam tahap input. Data tidak akan terkirim dan diverifikasi oleh
                        admin sampai
                        Calon Pelajar atau Wali melengkapi seluruh formulir dan kemudian mengklik tombol Kirim di
                        halaman review formulir.
                    </p>

                    <li class="fw-semibold">Pemeriksaan</li>
                    <p class="mb-0"> Data Calon Pelajar berhasil terkirim ke Admin dan sedang dalam antrian pemeriksaan.
                    </p>

                    <li class="fw-semibold">Revisi</li>
                    <p class="mb-0"> Terdapat kekurangan atau kesalahan pada data calon pelajar, calon pelajar/ wali
                        perlu segera merevisi dan mengirimkan kembali formulir online dengak klik tombol Kirim di
                        halaman Review.
                    </p>

                    <li class="fw-semibold">Lengkap</li>
                    <p class="mb-0"> Data calon pelajar telah diverifikasi oleh Admin dan dinyatakan lengkap. Harap
                        unduh Dokumen Pendaftaran untuk kemudian di cetak dan dibawa ke lokasi ujian masin-masing.
                    </p>

                    <li class="fw-semibold">Pembayaran</li>
                    <p class="mb-0">Jika berkas-berkas syarat ujian-masuk sudah selesai diperiksa oleh petugas saat tiba
                        di lokasi ujian, orang tua/wali dan calon pelajar akan mendapatkan Nomor Virtual Account untuk
                        melunasi pembayaran secara online (non tunai).
                    </p>

                    <li class="fw-semibold">Lunas</li>
                    <p class="mb-0">Status data Lunas berarti pembayaran telah berhasil dilakukan. Nomor Ujian akan
                        tertera pada halaman dasbor Capel.
                    </p>
                </ol>
            </div>
            <h5 id="addcapel">
                <a href="#addcapel">Tambah Capel</a>
            </h5>
            <p class="ps-5">
                Pendaftaran Capel dilakukan secara online. Pendaftar diwajibkan mengisi seluruh formulir yang ada dan bertanggungjawab atas data yang dikirimkan. Klik pada tombol <button class="btn btn-sm btn-success fs-12">Tambah Capel</button> dasbor untuk mulai mendaftarkan Capel.            </p>
            <h5 id="forms-validation">
                <a href="#forms-validation">Formulir &amp; Verifikasi</a>
            </h5>
            <p class="ps-5">
                Terdapat tujuh formulir yang harus dilengkapi oleh pendaftar dan akan diverifikasi oleh admin. Verifikasi data akan memakan waktu beberapa hari.            </p><div class="forms ps-5">
                Formulir tersebut adalah sebagai berikut:
                <ol>
                    <li>Formulir Biodata</li>
                    <li>Formulir Alamat</li>
                    <li>Formulir Akademis</li>
                    <li>Formulir Keluarga</li>
                    <li>Formulir Angket</li>
                    <li>Formulir Kesehatan</li>
                    <li>Berkas Pendaftaran. <a href="#upload-documents" class="btn btn-sm btn-primary fs-12">selengkapnya</a>
                    </li>
                </ol>
            </div>
            <p></p>
            <h5 id="test-zones">
                <a href="#test-zones">Zona Ujian Masuk</a>
            </h5>
            <p class="ps-5">
                Zona Ujian Masuk capel ditentukan dengan data provinsi yang tertera pada Kartu Keluarga dan/atau alamat domisili masing-masing capel. Periksa pembagian zona ujian masuk di halaman <a href="https://www.gontor.ac.id/pendaftaran" class="text-decoration-none text-blue">gontor.ac.id/pendaftaran</a>.            </p>
            <h5 id="upload-documents">
                <a href="#upload-documents">Unggah Berkas Pendaftaran</a>
            </h5>
            <p class="ps-5">
                Berkas yang harus diunggah adalah Pasfoto, Kartu Keluarga, Ijazah Terakhir. Surat Keterangan Domisili wajib diunggah jika pendaftar mengisi alamat domisili pada formulir alamat.            </p>
            <div class="ps-5">
                <img src="/img/pasfoto.png" height="150" alt="">
                <img src="/img/kk.jpeg" height="150" alt="">
                <img src="/img/ijazah.jpeg" height="150" alt="">
            </div>
            <p></p>
            <h4 id="fees-payment">
                <a href="#fees-payment">Biaya &amp; Pembayaran</a>
            </h4>
            <p class="ps-4">
                Biaya pendaftaran yang akan dibayarkan adalah <mark>6,880,500 untuk capel putra</mark> dan <mark>6,748,000 untuk capel putri</mark>. Pembayaran hanya dilakukan saat Capel dan Orang tua/Wali telang tiba di kampus lokasi ujian.            </p>
            <h5 id="method">
                <a href="#method">Metode Pembayaran</a>
            </h5>
            <p class=" ps-5">
                Setelah melakukan pemeriksaan berkas pendaftaran dan persyaratan, nomor VA akan muncul di dasbor capel.Klik pada tombol <button class="btn btn-sm btn-success fs-12">Nomor VA</button> untuk melihat rekening tujuan pembayaran.             </p>

            <div class="catatan fs-14 ps-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="alert alert-warning" role="alert">
                            <div>Note:</div>
                            <ul>
                                <li>Jangan sampai nomor VA capel tertukar dengan capel lainnya saat melakukan transfer atau transaksi pembayaran melalui m-banking, mesin ATM dll.                                </li>
                                <li>Pastikan nominal yang akan dibayarkan telah sesuai.                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="ps-4 pe-0">Apa itu nomor VA (Virtual Account)?</h5>
            <figure>
                <blockquote class="blockquote ps-5">
                    <p class="fs-16">
                        Virtual Account adalah nomor virtual rekening bank yang disediakan guna melakukan transaksi pembayaran.                    </p>
                </blockquote>
                <figcaption class="blockquote-footer ps-5">
                    source <cite title="Source Title">bfi.co.id</cite>
                </figcaption>
            </figure>
            <h5 id="when-pay">
                <a href="#when-pay">Kapan Pembayaran Dilakukan?</a>
            </h5>
            <p class=" ps-5">
                Pembayaran biaya pendaftaran dilakukan di kampus lokasi ujian, setelah pemeriksaan berkas. Calon Pelajar akan mendapatkan nomor ujian setelah melunasi biaya pendaftaran.             </p>
            <h4 id="help">
                <a href="#help">Bantuan</a>
            </h4>
            <p class="ps-4">
                Bantuan adalah fitur pertanyaan bagi pendaftar, orang tua/wali, jika ada hal terkait pendaftaran capel.
                Klik tombol <button class="btn btn-sm btn-success fs-12">Tanya</button> pada halaman Bantuan dan isi formulir pertanyaan dengan benar. Sisipkan file/berkas bilamana diperlukan.            </p>
            <h4 id="abroad-student">
                <a href="#abroad-student">Calon Pelajar Luar Negeri</a>
            </h4>
            <p class="ps-4">
                Calon Pelajar Luar Negeri adalah mereka yang bukan Warga Negara Indonesia (WNI), baik ia tinggal di negaranya atau menetap di wilayah Indonesia. <mark>WNI yang menetap/tinggal di luar negeri tidak termasuk dalam kategori Capel Luar Negeri dan harus mendaftar dengan memilih <strong>Indonesia</strong> sebagai kewarga-negaraannya. </mark>.            </p>
            <p></p>
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