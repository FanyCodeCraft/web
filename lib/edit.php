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
    $detail = mysqli_fetch_assoc($query);
}

// Proses pengeditan
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama_pemesanan = $_POST['nama_pemesanan'];
    $hp_pemesan = $_POST['hp_pemesan'];
    // Tambahkan field lain sesuai kebutuhan

    // Update query
    $sql_update = "UPDATE pemesanan SET nama_pemesanan='$nama_pemesanan', hp_pemesan='$hp_pemesan' WHERE id_pemesanan='$id_pemesanan'";
    
    if (mysqli_query($db, $sql_update)) {
        header('Location: detail.php?id_pemesanan=' . $id_pemesanan);
        exit;
    } else {
        echo 'Gagal memperbarui pemesanan.';
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan - Pariwisata Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<main class="flex-shrink-0 py-5 my-5">
  <div class="container">
    <h1>Edit Pemesanan #<?=$detail['id_pemesanan']?></h1>
    <form method="post" action="">
      <div class="mb-3">
        <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" value="<?=$detail['nama_pemesanan']?>" required>
      </div>
      <div class="mb-3">
        <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" value="<?=$detail['hp_pemesan']?>" required>
      </div>
      <!-- Tambahkan field lain sesuai kebutuhan -->
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      <a href="detail.php?id_pemesanan=<?=$detail['id_pemesanan']?>" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</main>

</body>
</html>