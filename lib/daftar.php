<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar pemesan - Pariwisata Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">daftar pesanan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../main/destinasi.php">Destinasi</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../main/tentang.php">Tentang </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../main/kontak.php">Kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../main/pesanan.php">Pemesanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">daftar pesan</a>
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

// Query untuk mengambil data pemesanan
$sql = "SELECT * FROM pemesanan WHERE is_deleted = 0 ORDER BY created_at DESC";
$query = mysqli_query($db, $sql);

// Memeriksa apakah ada hasil
if (mysqli_num_rows($query) == 0) {
    echo 'Tidak ada pemesanan yang ditemukan.';
    exit;
} else {
?>

<h1>Daftar Pemesanan</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pemesan</th>
      <th scope="col">Nomor HP</th>
      <th scope="col">Tanggal Berangkat</th>
      <th scope="col">Total Tagihan</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while ($detail = mysqli_fetch_assoc($query)) {
      ?>
    <tr>
      <th scope="row"><?=$co?></th>
      <td><?=$detail['nama_pemesanan']?></td>
      <td><?=$detail['hp_pemesan']?></td>
      <td><?=$detail['waktu_wisata']?></td>
      <td>Rp <?= number_format($detail['total_tagihan'], 0, ',', '.') ?></td>
      <td>
        <a href="detail.php?aksi=detail&id_pemesanan=<?=$detail['id_pemesanan']?>" class="btn btn-primary btn-sm" style="margin-right: 5px;">
        <i class="fas fa-info-circle"></i> Detail</a>
        <a href="edit.php?aksi=edit&id_pemesanan=<?=$detail['id_pemesanan']?>" class="btn btn-warning btn-sm" style="margin-right: 5px;">
        <i class="fas fa-edit"></i> Edit</a>
        <a href="hapus.php?aksi=hapus&id_pemesanan=<?=$detail['id_pemesanan']?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pemesanan ini?');">
        <i class="fas fa-trash"></i> Hapus</a>
     </td>
    </tr>
        <?php
        $co++;
      }
      ?>
  </tbody>
</table>
<?php
} 
?>

<!-- Footer -->
<footer class="bg-white text-dark text-center p-4 mt-5">
    <p>&copy; 2023 Pariwisata Indonesia. All Rights Reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>