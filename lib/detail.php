<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Invoice</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../main/destinasi.php">Destinasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../main/tentang.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../main/kontak.php">Kontak</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="../main/pesanan.php">Pemesanan</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="../lib/daftar.php">Daftar Pemesanan</a>
                </li>
            </ul>
             <!-- Form Pencarian -->
             <form class="form-inline ml-auto">
                <input class="form-control mr-2" type="search" placeholder="Cari..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
        </div>
    </nav>

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
    $detail = mysqli_fetch_row($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pemesanan - Pariwisata Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<main class="flex-shrink-0 py-5 my-5">
  <div class="container">
    <div class="card mt-2">
      <div class="card-header bg-dark text-white">
        Detail Pemesanan Paket Wisata <?=$detail[0]?>
      </div>
      <div class="card-body">
        <div class="mb-3">
          <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
          <div id="nama_pemesan"><?=$detail[1]?></div>
        </div>
        <div class="mb-3">
          <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
          <div id="hp_pemesan"><?=$detail[2]?></div>
        </div>
        <div class="mb-3">
          <label for="tanggal_wisata" class="form-label">Tanggal Wisata</label>
          <div id="tanggal_wisata"><?=date('d-m-Y', strtotime($detail[3]))?></div>
        </div>
        <div class="mb-3">
          <label for="waktu_mulai" class="form-label">Waktu Mulai Perjalanan</label>
          <div id="waktu_mulai"><?=date('H:i', strtotime($detail[4]))?></div>
        </div>
        <div class="mb-3">
          <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
          <div id="jumlah_peserta"><?=$detail[5]?></div>
        </div>
        <div class="mb-3">
          <label for="total" class="form-label">Total Tagihan</label>
          <div id="total">Rp. <?=number_format($detail[9],0,',','.')?></div>
        </div>
      </div>
      <div class="card-footer">
        <a href="edit.php?aksi=edit&id_pemesanan=<?=$detail[0]?>" class="btn btn-warning">Edit</a>
        <a href="" onclick="window.print()" class="btn btn-success">Cetak</a>
        <a href="hapus.php?aksi=hapus&id_pemesanan=<?=$detail[0]?>" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</main>

</body>
</html>

<?php } ?>