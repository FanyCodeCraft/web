<?php
include 'koneksi.php';

// Pastikan koneksi berhasil
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['nama_pemesanan'])) {
    // Definisikan setiap variabel
    $nama_pemesanan = htmlentities($_POST['nama_pemesanan']);
    $hp_pemesan = htmlentities($_POST['hp_pemesan']);
    $waktu_wisata = htmlentities($_POST['waktu_wisata']);
    $hari_wisata = htmlentities($_POST['hari_wisata']);
    $jumlah_peserta = htmlentities($_POST['jumlah_peserta']);
    $total_tagihan = htmlentities($_POST['total']);
    
    // Pengkondisian jika salah satu paket tidak dipilih
    $paket_inap = isset($_POST['paket_inap']) ? 1 : 0;
    $paket_transport = isset($_POST['paket_transport']) ? 1 : 0;
    $paket_makan = isset($_POST['paket_makan']) ? 1 : 0;

    // Menggunakan prepared statement
    $stmt = $db->prepare("INSERT INTO pemesanan (nama_pemesanan, hp_pemesan, waktu_wisata, hari_wisata, jumlah_peserta, total_tagihan, paket_inap, paket_transport, paket_makan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiisss", $nama_pemesanan, $hp_pemesan, $waktu_wisata, $hari_wisata, $jumlah_peserta, $total_tagihan, $paket_inap, $paket_transport, $paket_makan);

    if ($stmt->execute()) {
        // Jika berhasil, redirect ke daftar
        header('Location: ../lib/daftar.php');
        exit(); // Pastikan untuk keluar setelah redirect
    } else {
        echo "Error: " . $stmt->error; // Menampilkan error jika ada
    }

    $stmt->close();
} else {
    // Muncul pesan error
    echo 'Ngapain?';
}

$db->close(); // Menutup koneksi database
?>