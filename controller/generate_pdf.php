<?php
include
require_once('../.../controller/tc-lib-pdf-main/src/Tcpdf.php');


if (isset($_GET['no_pendfawal'])) {
    $no_pendfawal = $_GET['no_pendfawal'];

    // Ambil data untuk calon siswa tertentu dengan $no_pendf dari database
    // Sertakan koneksi database Anda di sini
    $query = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE no_pendfawal = '$no_pendfawal'");
    $data = mysqli_fetch_assoc($query);

    // Untuk tujuan demonstrasi, kita asumsikan Anda telah mengambil data yang diperlukan.
    // Ubah baris berikut untuk menggunakan data aktual dari database.
    $data = [
        'no_pendfawal' => $no_pendfawal,
        'nama' => 'John Doe',
        // Tambahkan bidang data lain di sini
    ];

    // Membuat PDF
    $pdf = new TCPDF();
    $pdf->AddPage();
    $pdf->SetFont('times', '', 12);
    $pdf->Cell(0, 10, 'Detil Calon Siswa', 0, 1, 'C');
    $pdf->Cell(0, 10, '========================', 0, 1, 'C');
    $pdf->Cell(0, 10, 'No: ' . $data['no_pendf'], 0, 1, 'L');
    $pdf->Cell(0, 10, 'Nama: ' . $data['nama'], 0, 1, 'L');
    // Tambahkan bidang data lain di sini
    $pdf->Output();
}
?>
