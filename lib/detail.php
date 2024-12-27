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
        Detail Pemesanan Paket Wisata #<?=$detail[0]?>
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
          <label for="total" class="form-label">Total Tagihan</label>
          <div id="total">Rp. <?=number_format($detail[9],0,',','.')?></div>
        </div>
      </div>
      <div class="card-footer">
        <a href="edit.php?aksi=edit&id_pemesanan=<?=$detail[0]?>" class="btn btn-warning">Edit</a>
        <a href="hapus.php?aksi=hapus&id_pemesanan=<?=$detail[0]?>" class="btn btn-danger">Hapus</a>
		<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</main>

</body>
</html>

<?php } ?>