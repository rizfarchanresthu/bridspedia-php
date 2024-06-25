<?php
include "config.php"; // Memanggil database
require_once 'vendor/autoload.php';

// Mulai sesi PHP
session_start();

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // Ambil informasi dokumen dari database
    $query = "SELECT * FROM db_dokumen WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $filename = 'file/' . $row['file'];

        // Catat waktu unduh
        $downloadTime = date('Y-m-d'); 
        

        // Ambil nama pengguna dari sesi
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Unknown User';

        // Load FPDI library
        require_once('vendor/setasign/fpdf/fpdf.php');
        require_once('vendor/setasign/fpdi/src/autoload.php');

        // Buat instance FPDI
        $pdf = new setasign\Fpdi\Fpdi();

        // Tambahkan halaman dari file PDF yang sudah ada
        $pageCount = $pdf->setSourceFile($filename);

        // Tambahkan watermark teks ke setiap halaman
        for ($i = 1; $i <= $pageCount; $i++) {
            $pdf->AddPage();
            $templateId = $pdf->importPage($i);
            $size = $pdf->getTemplateSize($templateId);

            $pdf->useTemplate($templateId, 0, 0, $size['width'], $size['height']);

            // Tambahkan watermark teks
            $pdf->SetFont('Arial', 'B', 20); // Atur jenis font, gaya, dan ukuran
            $pdf->SetTextColor(255, 0, 0, 128); // Merah dengan alpha 128 (sekitar 50%)
            $pdf->SetXY($size['width'] - 200, 5); // Posisi X dihitung dari kanan dan Y dari atas
            $pdf->Cell(0, 10, 'DOKUMEN RAHASIA', 0, 1, 'R'); // Tambahkan teks watermark (baris pertama)
            
            $pdf->SetXY($size['width'] - 200, 15); // Atur posisi untuk baris kedua
            $pdf->Cell(0, 10, 'HANYA UNTUK KEPERLUAN TERBATAS', 0, 1, 'R'); // Tambahkan teks watermark (baris kedua)
        
            // Tambahkan waktu unduh dan nama pengguna sebagai watermark di pojok kiri bawah
            $pdf->SetFont('Arial', 'B', 10); // Atur jenis font, gaya, dan ukuran
            $pdf->SetTextColor(128, 128, 128); // Abu-abu
            $pdf->SetXY(10, 265); // Posisi X dihitung dari kiri dan Y dari bawah
            $pdf->Cell(0, 10, 'Downloaded by: ' . $username . ' at: ' . $downloadTime, 0, 1, 'L'); // Tambahkan teks watermark (pojok kiri bawah)
        }

        // Tentukan header untuk tipe konten PDF dan attachment dengan nama file
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');

        // Keluarkan PDF yang dimodifikasi ke output
        $pdf->Output();
        exit;
    } else {
        echo "Dokumen tidak ditemukan.";
    }
}
?>
