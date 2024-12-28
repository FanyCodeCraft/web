<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi kami- Pariwisata Indonesia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Hubungi kami</a>
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
            <li class="nav-item">
                <a class="nav-link" href="../main/tentang.php">Tentang Kami</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../main/pesanan.php">Pemesanan</a>
            </li>
            <li  class="nav-item">
                    <a class="nav-link" href="../lib/daftar.php">Daftar Pemesanan</a>
                </li>
        </ul>
    </div>
</nav>

<!-- Bagian Kontak -->
<div class="container mt-5">
    <h2>Hubungi kami</h2>
    <div class="card">
        <div class="card-body">
            <form action="proses_kontak.php" method="post"> <!-- Ganti dengan URL yang sesuai -->
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Masukkan pesan Anda" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-white text-dark text-center p-4 mt-5">
    <p>&copy; 2023 Pariwisata Indonesia. All Rights Reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>