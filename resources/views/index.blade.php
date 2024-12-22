<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Harga Komoditas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #map {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            position: relative;
        }

        .region {
            fill: #cccccc;
            stroke: #000;
            stroke-width: 0.5;
            transition: fill 0.3s ease;
        }

        .region:hover {
            fill: #ff6600;
            cursor: pointer;
        }

        .tooltip {
            position: absolute;
            background: #333;
            color: #fff;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            display: none;
            pointer-events: none;
        }

        #articles {            padding: 20px;
            background-color: #f9f9f9;
        }

        .article {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .article-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .article-meta {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
        }

        .article-content {
            font-size: 1rem;
            color: #333;
        }

        .article-tags {
            margin-top: 15px;
        }

        .tag {
            display: inline-block;
            background-color: #e0e0e0;
            color: #555;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        body {
            background-color: #f0f8ff; /* Biru muda */
            color: #003366; /* Biru gelap */
            font-family: Arial, sans-serif;
        }
        .index-header {
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
        <a class="navbar-brand" href="#">CekPangan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forum">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">Tentang Kami</a>
                </li>
            </ul>
                @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="btn btn-blue"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="btn btn-blue"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="btn btn-blue"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
        </div>
    </div>
</nav>

<header class="index-header">
        <h1>CekPangan</h1>
        <p>Amanah Pangan untuk Masa Depan.</p>
</header>

<div id="map">
    {!! $svg !!} <!-- Inject SVG directly here -->
    <div class="tooltip" id="tooltip"></div>
</div>

<div id="articles" class="container">
    <h2>Berita Terbaru: Harga Pangan di Indonesia</h2>
    <div class="article">
        <h3 class="article-title">Harga Beras Mengalami Kenaikan</h3>
        <div class="article-meta">Oleh Lina Sari pada 17 November 2024</div>
        <div class="article-content">
            Harga beras di beberapa daerah di Indonesia dilaporkan mengalami kenaikan hingga 10% akibat musim kemarau panjang. Para petani juga menghadapi tantangan distribusi yang menyebabkan kelangkaan di pasaran.
        </div>
        <div class="article-tags">
            <span class="tag">Beras</span>
            <span class="tag">Harga Pangan</span>
            <span class="tag">Ekonomi</span>
        </div>
    </div>
    <div class="article">
        <h3 class="article-title">Harga Cabai Stabil, Pasokan Cukup</h3>
        <div class="article-meta">Oleh Andi Rahman pada 15 November 2024</div>
        <div class="article-content">
            Pasokan cabai di pasar tradisional tetap stabil dalam dua bulan terakhir, dengan harga rata-rata Rp30.000 per kilogram. Para pedagang memuji perbaikan distribusi oleh pemerintah daerah.
        </div>
        <div class="article-tags">
            <span class="tag">Cabai</span>
            <span class="tag">Pertanian</span>
            <span class="tag">Distribusi</span>
        </div>
    </div>
    <div class="article">
        <h3 class="article-title">Pemerintah Subsidi Minyak Goreng</h3>
        <div class="article-meta">Oleh Dewi Anggraini pada 10 November 2024</div>
        <div class="article-content">
            Untuk mengurangi beban masyarakat, pemerintah telah meluncurkan program subsidi minyak goreng. Harga minyak goreng kini berkisar di Rp14.000 per liter, jauh lebih rendah dibandingkan sebelumnya.
        </div>
        <div class="article-tags">
            <span class="tag">Minyak Goreng</span>
            <span class="tag">Subsidi</span>
            <span class="tag">Kebijakan</span>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const regions = document.querySelectorAll('.region');
    const tooltip = document.getElementById('tooltip');

    regions.forEach(region => {
        region.addEventListener('mouseover', (event) => {
            const regionName = event.target.querySelector('xlink:title') ? event.target.querySelector('xlink:title').innerHTML : 'Region Info';
            tooltip.style.display = 'block';
            tooltip.innerHTML = regionName;
            tooltip.style.left = event.pageX + 10 + 'px';
            tooltip.style.top = event.pageY + 10 + 'px';
        });

        region.addEventListener('mousemove', (event) => {
            tooltip.style.left = event.pageX + 10 + 'px';
            tooltip.style.top = event.pageY + 10 + 'px';
        });

        region.addEventListener('mouseout', () => {
            tooltip.style.display = 'none';
        });
    });
</script>

<footer class="text-center mt-4 py-4" style="background-color: #007bff; color: white;">
        <p>&copy; 2024 HargaKomoditas. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>
