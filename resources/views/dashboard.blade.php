<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Biru muda */
            color: #003366; /* Biru gelap */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .forum-header {
            background-color: #007bff; /* Biru utama */
            color: white;
            padding: 20px;
            text-align: center;
        }

        .navbar {
            background-color: #007bff;
            padding: 10px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .dashboard-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #003366;
        }

        .dashboard-section {
            margin-bottom: 30px;
        }

        .dashboard-section h3 {
            color: #003366;
        }

        .btn-blue {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-blue:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #003366;
        }

        .btn-link {
            color: #007bff;
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
                    <a class="nav-link" href="/forum">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="dashboard-container">
    <h2>Welcome, {{ auth()->user()->name }}!</h2>

    <div class="dashboard-section">
        <h3>Your Information</h3>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p><strong>Joined on:</strong> {{ auth()->user()->created_at->format('d M Y') }}</p>
    </div>

    <div class="dashboard-section">
        <h3>Actions</h3>
        <div class="row">
            <div class="col-md-6">
                <a href="/profile" class="btn-blue">Edit Profile</a>
            </div>
            <div class="col-md-6">
                <!-- Logout Button Form -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-blue">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <div class="dashboard-section">
        <h3>Your Posts</h3>
        <ul class="list-group">
            <li class="list-group-item">Post 1: <a href="#">View Post</a></li>
            <li class="list-group-item">Post 2: <a href="#">View Post</a></li>
            <li class="list-group-item">Post 3: <a href="#">View Post</a></li>
        </ul>
    </div>
</div>

<footer class="footer">
    <p>Don't want to continue? 
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn-link" style="background: none; border: none; color: #007bff; padding: 0;">Logout</button>
        </form>
    </p>
</footer>

    <footer class="text-center mt-4 py-4" style="background-color: #007bff; color: white;">
        <p>&copy; 2024 HargaKomoditas. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>