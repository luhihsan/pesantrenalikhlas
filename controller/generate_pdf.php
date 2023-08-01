<?php
// Include the FPDF library
require('fpdf186/fpdf.php');

include "connect.php";

$no_pendfawal = $_GET['no_pendfawal'];
$query = mysqli_query($connect, "SELECT * FROM pendaftaranawal WHERE no_pendfawal = '$no_pendfawal' ");
$data = mysqli_fetch_array($query);

// Create a new FPDF instance
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image('../logo.png', 10, 10, -150);
// Set the font and size

$pdf->SetFont('Arial', 'B', 26);
$pdf->Cell(0, 19, 'MTS AL IKHLAS BERBAH', 0, 1, 'C');

$pdf->SetFont('Arial', '', 15);
$pdf->Cell(0, 2, 'Pondok Pesantren Modern DI Yogyakarta', 0, 1,'C');
$pdf->Ln(15);

// Judul
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Memutuskan', 0, 1, 'C');
$pdf->Ln(4);

// Isi
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 8, 'Nama : '.$data['nama'], 0, 1);
$pdf->Cell(0, 8, 'No Registrasi : '.$data['no_pendfawal'], 0, 1);
$pdf->Cell(25, 8, 'Dinyatakan', 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(25, 8, 'DITERIMA', 0, 0); // The word "DITERIMA" will be in bold
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 8, 'sebagai calon santri baru MTS Al-Ikhlas Berbah', 0, 1);


$pdf->Cell(0, 8, 'dari hasil seleksi tahun akademik 2023/2024 pada :', 0, 1);
$pdf->Cell(0, 8, 'Nama Program : '.$data['program'], 0, 1);
$pdf->Cell(0, 8, 'Untuk proses selanjutnya, calon santri wajib melakukan registrasi dan verifikasi dokumen.', 0, 1);
$pdf->Cell(0, 8, 'Surat Keputusan ini berlaku sejak ditetapkan.', 0, 1);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(0, 10, 'Alhamdulillahirrabil\'alamin', 0, 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Yogyakarta, 1 Agustus 2023', 0, 1, 'R');
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Kepala MTs Al-Ikhlas Berbah', 0, 1, 'R');

// Add more invoice details here...

// Output the PDF
$pdf->Output('invoice.pdf', 'D'); // 'D' will force download the PDF
?>
