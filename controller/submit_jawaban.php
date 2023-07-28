<?php
include "connect.php";

$jawaban = $_POST['jawaban'];
$id_bantuan = $_POST['id_bantuan'];

$query_jawaban = mysqli_query($connect, "UPDATE bantuan SET jawaban = '$jawaban' WHERE id_bantuan='$id_bantuan'");
if ($query_jawaban) {
    echo "<script>alert('Berhasil!'); document.location.href = '../views/admin/?pengaturan';</script>";
} else {
    echo "<script>alert('Gagal!'); document.location.href = '../views/admin/?pengaturan';</script>";
}
?>