<?php
// Include the FPDF library
require('fpdf186/fpdf.php');

// Create a new FPDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set the font and size
$pdf->SetFont('Arial', '', 12);

// Add your invoice content
$pdf->Cell(0, 10, 'Invoice', 0, 1, 'C'); // Title
$pdf->Cell(50, 10, 'Nama :', 0, 0);
$pdf->Cell(0, 0, 'No Registrasi:', 0, 0);
$pdf->Cell(0, 0, 'Dinyatakan DITERIMA/DITOLAK sebagai calon santri baru MTS Al-Ikhlas Berbah dari hasil seleksi tahun akademik 2023/2024 pada', 0, 1); // Current date

// Add more invoice details here...

// Output the PDF
$pdf->Output('invoice.pdf', 'D'); // 'D' will force download the PDF
?>
