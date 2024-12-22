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

        #articles {            
            padding: 20px;
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
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/forum">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Tentang Kami</a>
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
    <p>Siapa Kami?</p>
</header>

<section id="about" class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>Selamat datang di CekPangan!</h2>
            <p>CekPangan adalah sebuah platform online yang didedikasikan untuk memberikan informasi terkini tentang harga pangan di Indonesia. Kami bertujuan untuk menyediakan data yang dapat diandalkan dan transparan mengenai harga pangan di berbagai daerah, memfasilitasi interaksi antara produsen, pedagang, dan konsumen, serta menjadi ruang diskusi yang konstruktif mengenai isu-isu pangan yang terjadi di tanah air.</p>

            <p>Dalam dunia yang semakin terhubung secara digital ini, CekPangan hadir sebagai solusi untuk memastikan bahwa setiap orang dapat mengakses informasi yang akurat tentang harga pangan dengan mudah. Kami memberikan kemudahan bagi petani, pedagang, konsumen, dan pihak terkait lainnya untuk mengakses data harga pangan yang selalu terbarui, yang dapat menjadi bahan pertimbangan dalam pengambilan keputusan yang lebih baik terkait dengan komoditas pangan.</p>

            <p>Melalui CekPangan, pengguna dapat melihat grafik perkembangan harga pangan dari waktu ke waktu, berbagi informasi dan tips tentang komoditas pangan, serta ikut berpartisipasi dalam forum diskusi yang diadakan oleh komunitas pengguna kami. Kami percaya bahwa melalui kolaborasi dan pertukaran informasi yang transparan, kita dapat membangun kesadaran yang lebih besar tentang pentingnya kestabilan harga pangan dan dampaknya terhadap ekonomi masyarakat.</p>

            <p>Kami juga berkomitmen untuk memberikan analisis dan laporan terkait dinamika pasar pangan, mulai dari pasokan, permintaan, hingga faktor-faktor yang mempengaruhi fluktuasi harga. Selain itu, CekPangan juga menghadirkan berita-berita terkini seputar pangan, dari kebijakan pemerintah hingga inovasi dalam bidang pertanian dan teknologi pangan yang dapat membantu memperbaiki sistem distribusi pangan di Indonesia.</p>

            <p>Platform ini bertujuan tidak hanya sebagai sumber informasi, tetapi juga sebagai jembatan yang menghubungkan berbagai pihak yang terlibat dalam ekosistem pangan, sehingga dapat saling berkolaborasi untuk meningkatkan ketahanan pangan nasional dan kesejahteraan masyarakat Indonesia secara keseluruhan. Kami percaya bahwa dengan keterbukaan informasi, semua pihak dapat membuat keputusan yang lebih bijaksana untuk mencapai harga pangan yang lebih stabil dan terjangkau.</p>

            <p>CekPangan berharap dapat menjadi mitra yang dapat diandalkan dalam mengakses informasi harga pangan yang lebih transparan, serta menciptakan ruang untuk diskusi yang bermanfaat bagi seluruh masyarakat Indonesia.</p>
        </div>
    </div>
</section>

    <footer class="text-center mt-4 py-4" style="background-color: #007bff; color: white;">
        <p>&copy; 2024 HargaKomoditas. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
