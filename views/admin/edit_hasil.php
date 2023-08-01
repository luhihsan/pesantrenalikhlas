<?php
    session_start();
    include "../../controller/connect.php";
    if ($_SESSION['login'] != 'true') {
        header('location:views/login-admin.php');
    }
$no_pendfawal = $_GET['no_pendfawal'];

if (isset($_GET['yes'])) {


    $query = mysqli_query($connect, "UPDATE pendaftaranawal SET status='1' WHERE no_pendfawal='$no_pendfawal'");

    if ($query) {
        echo "<script>alert('Berhasil!'); document.location.href = '../views/admin/?monitoring';</script>";
    } else {
        echo "<script>alert('Gagal!'); document.location.href = '../views/admin/?monitoring';</script>";
    }

} elseif (isset($_GET['no'])){


    $querytolak = mysqli_query($connect, "UPDATE pendaftaranawal SET status='2' WHERE no_pendfawal='$no_pendfawal'");
    if ($querytolak) {
        echo "<script>alert('Berhasil!'); document.location.href = '../views/admin/?monitoring';</script>";
    } else {
        echo "<script>alert('Gagal!'); document.location.href = '../views/admin/?monitoring';</script>";
    }

    $query = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE no_pendfawal='$no_pendfawal'");
    $data = mysqli_fetch_array($query);
    $id = $data['id'];
    $nama = $data['nama'];

    $queryblacklist = mysqli_query($connect, "INSERT INTO blacklist VALUE('$id', '$nama')");

    // $querypendaftarawal = mysqli_query($connect, "DELETE FROM pendaftaranawal WHERE no_pendfawal='$no_pendfawal'");


    if ($querypendaftarawal) {
         echo "<script>alert('Berhasil!'); document.location.href = '../views/admin/?monitoring';</script>";
    } else {
        echo "<script>alert('Gagal!'); document.location.href = '../views/admin/?monitoring';</script>";
    }
}
?>
 


