<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan - Pariwisata Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Destinasi wisata</a>
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

<main class="flex-shrink-0 py-5 my-5">
  <div class="container">
    <h1>Edit Pemesanan</h1>
    <form method="post" action="">
      <div class="mb-3">
        <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" value="mustafid" required>
      </div>
      <div class="mb-3">
        <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
        <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" value="085678768765" required>
      </div>
      <div class="mb-3">
        <label for="tanggal_wisata" class="form-label">Tanggal Wisata</label>
        <input type="date" class="form-control" id="tanggal_wisata" name="tanggal_wisata" required>
      </div>
      <div class="mb-3">
        <label for="waktu_mulai" class="form-label">Waktu Mulai Perjalanan</label>
        <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai" required>
      </div>
      <div class="mb-3">
        <label for="kuota_orang" class="form-label">Kuota (Jumlah Orang)</label>
        <input type="number" class="form-control" id="kuota_orang" name="kuota_orang" min="1" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
      <a href="detail.php?id_pemesanan=11" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</main>

</body>
</html>