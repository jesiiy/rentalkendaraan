<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
<style>
    .ltn__login-area {
        background-color: #fdeff2;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 2rem;
    }

    .btn-primary {
        background-color: #ff69b4;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #d14896;
    }

    .text-muted {
        color: #d36b8b !important;
    }
</style>
</head>
<body>

<div class="ltn__login-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Sign In To Your Account</h2>
                        <p class="text-center text-muted mb-4">
                            Masuk ke akun Anda untuk menikmati akses penuh ke fitur eksklusif kami. Dengan login, Anda dapat menyimpan produk favorit, <br>
                            menerima rekomendasi yang dipersonalisasi, dan memantau status pesanan Anda kapan saja. Jangan lewatkan penawaran khusus hanya untuk anggota
                        </p>
                        <form action="<?= base_url('Home/dashboard') ?>" method="post" class="needs-validation" novalidate>
                            <div class="form-group mb-3">
                                <input type="text" name="email" class="form-control" placeholder="Email*" required>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="pswd" class="form-control" placeholder="Password*" required>
                            </div>
                            <div class="d-grid gap-2">
                                <div class="g-recaptcha" data-sitekey="6Le84ekqAAAAAMfF4rafQJyXaRgs4GhchNc6hHUc"></div>
                                <button class="btn btn-primary btn-block" type="submit" onclick="validateCaptcha()">SIGN IN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <div class="account-create mt-4 mt-lg-0">
                    <h4 class="text-dark">TIDAK MEMILIKI AKUN?</h4>
                    <p class="text-muted">
                        Daftar sekarang untuk kemudahan sewa kendaraan dan akses promo eksklusif! 
                    </p>
                    <a href="register" class="btn btn-outline-secondary">CREATE ACCOUNT</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function validateCaptcha() {
        var response = grecaptcha.getResponse();
        if(response.length === 0) {
            alert("Please complete the CAPTCHA before submitting.");
        } else {
            document.getElementById('login-form').submit();
        }
    }
</script>
</body>
</html>