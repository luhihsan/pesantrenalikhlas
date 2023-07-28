<?php
    session_start();
    include "connect.php";

    $no_pendfawal = rand();

    // Menangkap data biodata
    $nama = $_POST['nama'];
    $id = $_SESSION['id'];
    $tgllhr = $_POST['tgllahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $nisn = $_POST['nisn'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $alamat = $_POST['alamat'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $nohp = $_POST['nohp'];
    $program = $_POST['program'];

    // Masukkan data ke database (tabel pendaftarawal)
    $querypendaftarawal = mysqli_query($connect, "INSERT INTO pendaftaranawal (no_pendfawal, id, nama, tgllhr, nisn, asal_sekolah, alamat, tempat_lahir, nama_ayah, nama_ibu, nohp, program, status, id_user) 
                                                VALUES ('$no_pendfawal', '$id', '$nama', '$tgllhr', '$nisn', '$asal_sekolah', '$alamat', '$tempat_lahir', '$nama_ayah', '$nama_ibu', '$nohp', '$program', '0', '$id')");

    if ($querypendaftarawal) {
        // Redirect ke halaman yang diinginkan setelah pendaftaran berhasil
        echo "<script>alert('Pendaftaran awal siswa berhasil!'); document.location.href = '../views/pendaftar?pendaftaranawal';</script>";
    } else {
        // Tampilkan pesan gagal jika pendaftaran gagal
        echo "<script>alert('Pendaftaran awal siswa gagal!'); document.location.href = '../views/pendaftar?pendaftaranawal';</script>";
    }
?>
