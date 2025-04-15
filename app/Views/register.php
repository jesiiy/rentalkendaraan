<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #fdeff2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .register-container {
        background-color: #fff;
        padding: 20px 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }
    .register-container h1 {
        color: #d63384;
        text-align: center;
    }
    .register-container p {
        color: #d36b8b;
        text-align: center;
        margin-bottom: 20px;
    }
    .register-container input[type="text"],
    .register-container input[type="password"],
    .register-container input[type="email"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #f4a5c0;
        border-radius: 5px;
    }
    .register-container button {
        background-color: #ff69b4;
        color: white;
        border: none;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
    .register-container button:hover {
        background-color: #d14896;
    }
    .register-container a {
        color: #ff69b4;
        text-decoration: none;
        display: block;
        text-align: center;
        margin-top: 10px;
    }
    .register-container a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="register-container">
        <h1>Daftar Akun</h1>
        <p>Buat akun untuk kemudahan sewa kendaraan.</p>
       <form action="<?= base_url('home/registerProcess') ?>" method="post">
    <input type="text" name="nama_pelanggan" placeholder="Nama Lengkap" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <div class="mb-3">
                                    <ul class="list-group">
                                        <li class="list-group-item"><span id="length" class="invalid">❌</span> Minimal 8 karakter</li>
                                        <li class="list-group-item"><span id="uppercase" class="invalid">❌</span> Huruf besar</li>
                                        <li class="list-group-item"><span id="lowercase" class="invalid">❌</span> Huruf kecil</li>
                                        <li class="list-group-item"><span id="number" class="invalid">❌</span> Angka</li>
                                    </ul>
                                </div>
                                <div class="mb-3">
                                    <p class="strength">Kekuatan Password: <span id="password-strength" class="weak">Lemah</span></p>
                                </div>
    <input type="text" name="nomor_ktp" placeholder="Nomor KTP" required>
    <select name="jenis_kelamin" required>
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    </select>
    <input type="text" name="no_hp" placeholder="Nomor HP" required>
    <input type="text" name="alamat" placeholder="Alamat" required>
    <input type="text" name="nomor_sim" placeholder="Nomor SIM" required>
    <button type="submit" id="submit-btn">Daftar</button>
</form>


        <a href="<?= base_url('home/login') ?>">Sudah punya akun? Masuk</a>
    </div>
<script>
        const passwordInput = document.getElementById("password");
        const lengthCheck = document.getElementById("length");
        const uppercaseCheck = document.getElementById("uppercase");
        const lowercaseCheck = document.getElementById("lowercase");
        const numberCheck = document.getElementById("number");
        const passwordStrength = document.getElementById("password-strength");
        const submitBtn = document.getElementById("submit-btn");

        passwordInput.addEventListener("input", function() {
            const password = passwordInput.value;
            const lengthValid = password.length >= 8;
            const hasUppercase = /[A-Z]/.test(password);
            const hasLowercase = /[a-z]/.test(password);
            const hasNumber = /\d/.test(password);

            lengthCheck.innerHTML = lengthValid ? "✅" : "❌";
            uppercaseCheck.innerHTML = hasUppercase ? "✅" : "❌";
            lowercaseCheck.innerHTML = hasLowercase ? "✅" : "❌";
            numberCheck.innerHTML = hasNumber ? "✅" : "❌";

            lengthCheck.className = lengthValid ? "valid" : "invalid";
            uppercaseCheck.className = hasUppercase ? "valid" : "invalid";
            lowercaseCheck.className = hasLowercase ? "valid" : "invalid";
            numberCheck.className = hasNumber ? "valid" : "invalid";

            let score = lengthValid + hasUppercase + hasLowercase + hasNumber;
            if (score <= 1) {
                passwordStrength.textContent = "Lemah";
                passwordStrength.className = "strength weak";
            } else if (score === 2 || score === 3) {
                passwordStrength.textContent = "Lumayan";
                passwordStrength.className = "strength medium";
            } else {
                passwordStrength.textContent = "Kuat";
                passwordStrength.className = "strength strong";
            }
            submitBtn.disabled = score < 4;
        });
    </script>
</body>
</html>

