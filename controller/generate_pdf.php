<?php
// Include the FPDF library
require('fpdf186/fpdf.php');

// Create a new FPDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set the font and size
$pdf->SetFont('Arial', '', 12);

// Judul
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Memutuskan', 0, 1, 'C');
$pdf->Ln(5);

// Isi
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 8, 'Nama : ', 0, 1);
$pdf->Cell(0, 8, 'No Registrasi : ', 0, 1);
$pdf->Cell(0, 8, 'Dinyatakan sebagai calon santri baru MTS Al-Ikhlas Berbah', 0, 1);
$pdf->Cell(0, 8, 'dari hasil seleksi tahun akademik 2023/2024 pada', 0, 1);
$pdf->Cell(0, 8, 'Nama Program : ', 0, 1);
$pdf->Cell(0, 8, 'Untuk proses selanjutnya, calon mahasiswa wajib melakukan registrasi dan verifikasi dokumen.', 0, 1);
$pdf->Cell(0, 8, 'Surat Keputusan ini berlaku sejak ditetapkan.', 0, 1);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(0, 10, 'Alhamdulillahirrabil\'alamin', 0, 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Yogyakarta, ', 0, 1, 'R');
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'Kepala MTs Al-Ikhlas Berbah', 0, 1, 'R');

// Add more invoice details here...

// Output the PDF
$pdf->Output('invoice.pdf', 'D'); // 'D' will force download the PDF
?>
