<?php
include 'koneksi.php';

// Pastikan koneksi berhasil
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Mengambil dan membersihkan input dari URL
$id_pemesanan = isset($_GET['id_pemesanan']) ? htmlentities($_GET['id_pemesanan']) : null;

if ($id_pemesanan === null) {
    echo 'ID pemesanan tidak ditemukan.';
    exit;
}

// Query untuk memeriksa apakah pemesanan ada
$sql = "SELECT * FROM pemesanan WHERE id_pemesanan = '$id_pemesanan' AND is_deleted = 0";
$query = mysqli_query($db, $sql);

if (mysqli_num_rows($query) == 0) {
    echo 'Tidak ada pemesanan yang ditemukan.';
    exit;
} else {
    // Query untuk menghapus pemesanan
    $sql_hapus = "UPDATE pemesanan SET is_deleted = '1' WHERE id_pemesanan = '$id_pemesanan'";
    $query_hapus = mysqli_query($db, $sql_hapus);

    if ($query_hapus) {
        // Redirect ke daftar pemesanan setelah berhasil menghapus
        header('Location: daftar.php');
        exit; // Pastikan untuk menghentikan eksekusi skrip setelah redirect
    } else {
        echo 'Gagal menghapus pemesanan. Silakan coba lagi.';
        exit;
    }
}
?>