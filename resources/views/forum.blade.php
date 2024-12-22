<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Harga Komoditas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Biru muda */
            color: #003366; /* Biru gelap */
            font-family: Arial, sans-serif;
        }
        .forum-header {
            background-color: #007bff; /* Biru utama */
            color: white;
            padding: 20px;
            text-align: center;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: white;
        }
        .article-card {
            transition: transform 0.2s;
            border: 1px solid #d4e9f9;
        }
        .article-card:hover {
            transform: scale(1.02);
        }
        .btn-blue {
            background-color: #007bff;
            color: white;
        }
        .btn-blue:hover {
            background-color: #0056b3;
        }
        .category-list a {
            text-decoration: none;
            color: #007bff;
        }
        .category-list a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">CekPangan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/forum">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about-us">Tentang Kami</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari Diskusi" aria-label="Search">
                    <button class="btn btn-blue" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <header class="forum-header">
        <h1>Forum Harga Komoditas</h1>
        <p>Diskusikan tentang harga dan ketersediaan komoditas di daerah Anda.</p>
    </header>

    <div class="container mt-4">
        <div class="row">
            <!-- Konten Utama -->
            <div class="col-md-8">
                <h3>Diskusi Terbaru</h3>
                <div class="row">
                    <!-- Kartu Diskusi -->
                    <div class="col-md-6 mb-4">
                        <div class="card article-card">
                            <div class="card-body">
                                <h5 class="card-title">Harga Padi Terkini</h5>
                                <p class="card-text">Bagaimana harga padi di daerah Anda saat ini?</p>
                                <a href="/forum/harga-padi" class="btn btn-blue">Ikuti Diskusi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card article-card">
                            <div class="card-body">
                                <h5 class="card-title">Panen Jagung di Jawa</h5>
                                <p class="card-text">Diskusi tentang ketersediaan jagung di musim panen ini.</p>
                                <a href="/forum/panen-jagung" class="btn btn-blue">Ikuti Diskusi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <h4>Kategori Diskusi</h4>
                <ul class="category-list">
                    <li><a href="/forum/kategori/padi">Harga Padi</a></li>
                    <li><a href="/forum/kategori/jagung">Panen Jagung</a></li>
                    <li><a href="/forum/kategori/sayur">Komoditas Sayur</a></li>
                    <li><a href="/forum/kategori/buah">Komoditas Buah</a></li>
                </ul>

                <h4 class="mt-4">Diskusi Populer</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="/forum/populer/1">Tren Harga Cabe Tahun Ini</a></li>
                    <li class="list-group-item"><a href="/forum/populer/2">Krisis Harga Bawang Merah</a></li>
                    <li class="list-group-item"><a href="/forum/populer/3">Strategi Menghadapi Tengkulak</a></li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="text-center mt-4 py-4" style="background-color: #007bff; color: white;">
        <p>&copy; 2024 HargaKomoditas. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
