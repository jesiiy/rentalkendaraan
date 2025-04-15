<!DOCTYPE html>
<html lang="id">
<main id="main" class="main">
      <div class="pagetitle">
      </div>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Petugas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <style>
        .welcome-text {
            color: #ff85a2; /* Warna pink yang lembut sesuai sidebar */
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }

        .description-text {
            text-align: center;
            color: gray;
        }
        /* Card Styling */
                .card-box {
            color: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            font-size: 1.1rem;
            box-shadow: 4px 4px 15px rgba(0, 0, 0, 0.15);
            transition: 0.3s ease-in-out;
        }

        .card-box:hover {
            transform: translateY(-5px);
            box-shadow: 6px 6px 20px rgba(0, 0, 0, 0.2);
        }

        .card-pink1 {
            background-color: #ff85a2;
        }

        .card-pink2 {
            background-color: #ff85a2;
        }

        .card-pink3 {
            background-color: #ff85a2;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: bold;
        }
    </style>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1 class="welcome-text">Selamat Datang, Petugas!</h1>
        <p class="description-text">Gunakan menu di samping untuk mengelola data.</p>
    </div>
    <script>
        function logout() {
            alert("Anda telah logout.");
            window.location.href = "login";
        }
        document.getElementById("toggleSidebar").addEventListener("click", function() {
        document.body.classList.toggle("sidebar-collapsed");
    });
    </script>

</body>
</html>
