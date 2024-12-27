<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pariwisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <style>
    .jumbotron {
    background-image: url('https://i.pinimg.com/736x/89/1a/a2/891aa2d55d84006f0706b939bb92e122.jpg'); /* Ganti dengan URL gambar latar belakang yang diinginkan */
    background-size: cover; /* Pastikan gambar menutupi seluruh area */
    background-position: center; /* Posisikan gambar di tengah */
    background-repeat: no-repeat; /* Jangan ulang gambar */
    color: white; /* Mengubah warna teks menjadi putih agar kontras dengan latar belakang */
    padding: 100px 30%; /* Sesuaikan padding jika diperlukan */
}
    </style>
</body>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pariwisata Indonesia</a>
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
                    <a class="nav-link" href="../main/pesanan.php">pemesanan</a>
                </li>
                <li  class="nav-item">
                    <a class="nav-link" href="../lib/daftar.php">daftar pemesan</a>
                </li>

                 <!-- Form Pencarian -->
             <form class="form-inline ml-auto">
                <input class="form-control mr-2" type="search" placeholder="Cari..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
            </form>
            </ul>
        </div>
    </nav>
<div>

</div>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata Indonesia</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .hero {
            background-image: url('https://source.unsplash.com/1600x900/?indonesia,travel');
            background-size: cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .section {
            padding: 60px 0;
        }
    </style>
</head>

<body>

    <header class="hero">
        <div class="container">
            <h1>Selamat Datang di Web Pariwisata Indonesia</h1>
            <p>Temukan keindahan dan kekayaan budaya Indonesia</p>
        </div>
    </header>

    <div class="container section">
        <h2>Tentang Kami</h2>
        <p>Web pariwisata Indonesia adalah platform yang dirancang untuk membantu wisatawan menemukan berbagai destinasi menarik di seluruh Indonesia. Dari pantai yang memukau hingga pegunungan yang menakjubkan, kami menyediakan informasi lengkap tentang tempat-tempat yang wajib dikunjungi.</p>
    </div>

    <div class="container section">
        <h2>Destinasi Populer</h2>
        <ul class="list-group">
            <li class="list-group-item">Bali - Surga tropis dengan pantai yang indah dan budaya yang kaya.</li>
            <li class="list-group-item">Yogyakarta - Kota budaya dengan banyak candi bersejarah.</li>
            <li class="list-group-item">Komodo - Rumah bagi komodo, hewan purba yang hanya ada di Indonesia.</li>
            <li class="list-group-item">Raja Ampat - Keajaiban bawah laut dengan keanekaragaman hayati yang luar biasa.</li>
            <li class="list-group-item">Jakarta - Ibu kota yang penuh dengan kehidupan dan berbagai atraksi modern.</li>
        </ul>
    </div>

    <footer class="container text-center section">
        <p>&copy; 2023 Web Pariwisata Indonesia. Semua hak dilindungi.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>