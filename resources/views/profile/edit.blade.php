<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff; /* Light blue */
            color: #003366; /* Dark blue */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .forum-header {
            background-color: #007bff; /* Primary blue */
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

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #003366;
        }

        .form-group label {
            font-weight: bold;
            color: #003366;
        }

        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #d4e9f9;
            border-radius: 5px;
            background-color: #f9f9f9;
            color: #003366;
        }

        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            outline: none;
            border-color: #007bff;
        }

        .btn-blue {
            width: 100%;
            padding: 12px;
            background-color: #28a745; /* Green */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-blue:hover {
            background-color: #218838; /* Darker green */
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #003366;
        }

        .section {
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .section h3 {
            color: #003366;
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

    <div class="forum-header">
        <h1>Profile Management</h1>
    </div>

    <div class="container">

        <div class="section">
            <div class="form-group">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="section">
            <div class="form-group">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="section">
            <div class="form-group">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
    
    <footer class="text-center mt-4 py-4" style="background-color: #007bff; color: white;">
        <p>&copy; 2024 HargaKomoditas. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
