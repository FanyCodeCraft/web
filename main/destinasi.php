<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-img-top {
            height: 200px; /* Set height yang konsisten */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
        }
    </style>
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
                    <a class="nav-link" href="#">Destinasi</a>
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

    <!-- Bagian Destinasi -->
    <div class="container mt-5">
        <h2>Destinasi Wisata</h2>
        <div class="row">
            <!-- Destinasi 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/b9/9b/24/b99b24d45a3fd5c9cbd999cc604a67ff.jpg" class="card-img-top" alt="Pulau Komodo">
                    <div class="card-body">
                        <h5 class="card-title">Pulau Komodo</h5>
                        <p class="card-text">pulau yang terletak di Kepulauan Nusa Tenggara, Indonesia. Pulau ini merupakan habitat asli hewan komodo (Varanus komodoensis). .</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Destinasi 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/80/66/7f/80667f09fcd643c3dccac41b7179e14e.jpg" class="card-img-top" alt="Yogyakarta">
                    <div class="card-body">
                        <h5 class="card-title">Yogyakarta</h5>
                        <p class="card-text">Kunjungi Candi Borobudur dan nikmati budaya yang kaya di Yogyakarta.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Destinasi 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/46/e2/31/46e231b15a0fbca302f34e57d4799026.jpg" class="card-img-top" alt="Jakarta">
                    <div class="card-body">
                        <h5 class="card-title">Jakarta</h5>
                        <p class="card-text">Jelajahi ibu kota Indonesia dengan berbagai atraksi modern dan sejarah.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Destinasi 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/91/65/00/9165005b24c025260814c8d38e8fa438.jpg" class="card-img-top" alt="Lombok">
                    <div class="card-body">
                        <h5 class="card-title">Lombok</h5>
                        <p class="card-text">Nikmati keindahan alam dan budaya yang unik di Lombok.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Destinasi 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/d0/b1/45/d0b1459643c312619c315ef238399cb5.jpg" class="card-img-top" alt="Gili Trawangan">
                    <div class="card-body">
                        <h5 class="card-title">Gili Trawangan</h5>
                        <p class="card-text">Temukan keindahan bawah laut dan suasana santai di Gili Trawangan.</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Destinasi 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/dc/8c/89/dc8c89b3d1b58e07b0e16c15d7483f52.jpg" class="card-img-top" alt="Nusa Penida">
                    <div class="card-body">
                        <h5 class="card-title">Nusa Penida</h>
                            <p class="card-text">Temukan keindahan bawah laut dan suasana santai di Gili Trawangan.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <!-- Destinasi 7 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/76/44/61/764461b4499db0bd733136e84fc9c8bf.jpg" class="card-img-top" alt="Nusa Penida">
                    <div class="card-body">
                        <h5 class="card-title">pantai Losari</h>
                            <p class="card-text"> Surga di tepi pantai makasar.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <!-- Destinasi 8 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/46/52/20/4652200eb4f1ecdaee883cf17e69c682.jpg" class="card-img-top" alt="Nusa Penida">
                    <div class="card-body">
                        <h5 class="card-title">Curug pangeran</h>
                            <p class="card-text">temukan kesegaran di curug yang sejuk.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            <!-- Destinasi 9 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.pinimg.com/736x/03/d6/89/03d6890a4f0657ec768a314a5d63c907.jpg" class="card-img-top" alt="Nusa Penida">
                    <div class="card-body">
                        <h5 class="card-title">Svarga bumi borobudur</h>
                            <p class="card-text">Temukan keindahan suasana  pesawahan.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="text-center mt-4 mb-4">
    <p>&copy; 2023 Pariwisata Indonesia. Semua hak dilindungi.</p>
</footer>