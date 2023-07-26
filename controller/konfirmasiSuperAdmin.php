<?php

include "connect.php";

if (isset($_GET['yes'])) {

    $id = $_GET['id'];

    $query = mysqli_query($connect, "UPDATE user SET id_level='1' WHERE id='$id'");

    if ($query) {
        echo "<script>alert('Berhasil Menjadikan Sebagai Admin!'); document.location.href = '../views/superadmin/?monitoring';</script>";
    } else {
        echo "<script>alert('Gagal Menambahkan Sebagai Admin!'); document.location.href = '../views/superadmin/?monitoring';</script>";
    }

} else {

    $id = $_GET['id'];
    $idlevel = $_GET['id_level'];

    $query = mysqli_query($connect, "SELECT * FROM user WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    $nama = $data['id'];
}
?>
