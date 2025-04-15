<main id="main" class="main">
    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-lg border-0 rounded-4" style="background: #ffe6f2; border: 2px solid #ff66b2;">
                    <div class="card-body p-4">
                        <h3 class="mb-4 text-center text-pink">Form Sewa</h3>

                        <form action="<?= base_url('home/aksi_sewa') ?>" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama_pelanggan" class="form-label text-pink">Nama Pelanggan</label>
                                <input type="text" id="nama_pelanggan" class="form-control border-pink" name="nama_pelanggan">
                            </div>
                            <div class="mb-3">
                                <label for="rentang" class="form-label text-pink">Jenis Kelamin</label>
                                <select class="form-control border-pink" id="jeniskelamin" name="jeniskelamin">
                                    <option value="">-PILIH JENIS KELAMIN-</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                             <div class="mb-3">
                             <label for="ktp" class="form-label">Foto KTP:</label>
                             <input type="file" class="form-control" id="ktp" name="ktp" accept="image/*" required>
                             <div class="mb-3">
                             <label for="sim" class="form-label">Foto SIM:</label>
                             <input type="file" class="form-control" id="sim" name="sim" accept="image/*" required>
                             <div class="mb-3">
                                <label for="nama_pelanggan" class="form-label text-pink">No HP</label>
                                <input type="text" id="nohp" class="form-control border-pink" name="nohp">
                            </div>
                            <div class="mb-3">
                                <label for="nama_pelanggan" class="form-label text-pink">Alamat</label>
                                <input type="text" id="alamat" class="form-control border-pink" name="alamat">
                            </div>
                            <div class="mb-3">
                                <label for="kendaraan" class="form-label text-pink">Nama Kendaraan</label>
                                <select class="form-control border-pink" id="kendaraan" name="nama_kendaraan">
                                    <option value="">Pilih Kendaraan</option>
                                    <?php foreach ($takdirestui as $key => $value) { ?>
                                        <option value="<?= $value->id_kendaraan ?>" data-harga="<?= $value->harga_perhari ?>">
                                            <?= $value->merk ?> - <?= $value->nomor_plat ?> - IDR <?= number_format($value->harga_perhari, 0, ',', '.') ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="tanggal_peminjaman" class="form-label text-pink">Tanggal Peminjaman</label>
                                <input type="date" id="tanggal_peminjaman" class="form-control border-pink" name="tanggal" required>
                            </div>

                            <input type="hidden" id="harga_awal" name="harga_awal">

                            <div class="mb-3">
                                <label for="total_harga" class="form-label text-pink">Total Harga</label>
                                <input type="text" id="total_harga" class="form-control-plaintext text-pink fw-bold" name="total_harga" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="rentang" class="form-label text-pink">Durasi Sewa (Hari)</label>
                                <select class="form-control border-pink" id="rentang" name="durasi">
                                    <option value="">-PILIH RENTANG PEMINJAMAN-</option>
                                    <option value="1">1 HARI</option>
                                    <option value="2">2 HARI</option>
                                    <option value="3">3 HARI</option>
                                    <option value="4">4 HARI</option>
                                    <option value="5">5 HARI</option>
                                    <option value="6">6 HARI</option>
                                    <option value="7">SEMINGGU</option>
                                </select>
                            </div>
                            <div class="mb-3">
    <label for="metode_pembayaran" class="form-label text-pink">Metode Pembayaran</label>
    <select class="form-control border-pink" id="metode_pembayaran" name="metode">
        <option value="">Pilih Metode</option>
        <option value="bank">Transfer Bank</option>
        <option value="ovo">OVO</option>
        <option value="gopay">GoPay</option>
        <option value="dana">DANA</option>
    </select>
</div>

<div class="mb-3" id="info_pembayaran" style="display: none;">
    <label class="form-label text-pink">JESYCA</label>
    <input type="text" id="nomor_pembayaran" class="form-control-plaintext text-pink fw-bold" readonly>
</div>
                        <div class="mb-3">
                        <label for="poster" class="form-label">Bukti Pembayaran:</label>
                        <input type="file" class="form-control" id="poster" name="bukti" accept="image/*" required>
                            <div class="text-center">
                                <button type="submit" a href="selpem" class="btn btn-pink px-4">SELESAIKAN PEMBAYARAN</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
    .text-pink { color: #ff3399; }
    .border-pink { border: 2px solid #ff66b2 !important; }
    .btn-pink { background: #ff66b2; color: white; border: none; }
    .btn-pink:hover { background: #ff3385; }
    {
    background: linear-gradient(to right, #ffccdd, #ff99cc);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
}
.main {
    background: #ffe6f2 !important;
    padding: 20px;
    border-radius: 12px;
}   
#info_pembayaran {
    background: #ffedf5;
    padding: 10px;
    border-radius: 8px;
}

</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let kendaraanSelect = document.getElementById("kendaraan");
    let hargaAwalInput = document.getElementById("harga_awal");
    let rentangSelect = document.getElementById("rentang");
    let totalHargaInput = document.getElementById("total_harga");

    function updateKendaraan() {
        let selectedOption = kendaraanSelect.options[kendaraanSelect.selectedIndex];

        if (selectedOption.value !== "") {
            hargaAwalInput.value = selectedOption.getAttribute("data-harga") || 0;
        } else {
            hargaAwalInput.value = 0;
        }
        hitungHarga();
    }

    function hitungHarga() {
        let hargaAwal = parseFloat(hargaAwalInput.value) || 0;
        let hari = parseInt(rentangSelect.value) || 0;

        if (hari > 0 && hargaAwal > 0) {
            let totalHarga = hargaAwal * hari;
            totalHargaInput.value = "IDR " + totalHarga.toLocaleString("id-ID");
        } else {
            totalHargaInput.value = "";
        }
    }

    kendaraanSelect.addEventListener("change", updateKendaraan);
    rentangSelect.addEventListener("change", hitungHarga);
});

// ** Validasi Metode Pembayaran **
document.addEventListener("DOMContentLoaded", function () {
    let metodeSelect = document.getElementById("metode_pembayaran");
    let infoPembayaran = document.getElementById("info_pembayaran");
    let nomorPembayaran = document.getElementById("nomor_pembayaran");

    let dataPembayaran = {
        "bank": "1234-5678-9101 (BCA)",
        "ovo": "0812-3456-7890 (OVO)",
        "gopay": "0812-9876-5432 (GoPay)",
        "dana": "0813-1111-2222 (DANA)"
    };

    metodeSelect.addEventListener("change", function () {
        let metode = metodeSelect.value;
        if (metode && dataPembayaran[metode]) {
            nomorPembayaran.value = dataPembayaran[metode];
            infoPembayaran.style.display = "block";
        } else {
            infoPembayaran.style.display = "none";
            nomorPembayaran.value = "";
        }
    });
});

// ** Validasi dan Cek Input Kosong **
document.addEventListener("DOMContentLoaded", function () {
    let form = document.querySelector("form");
    let requiredFields = ["nama_pelanggan", "jeniskelamin", "nohp", "alamat", "kendaraan", "tanggal_peminjaman", "rentang", "metode_pembayaran"];
    let submitBtn = document.getElementById("submit-btn");

    function checkFormValidity() {
        let allFilled = true;
        requiredFields.forEach(function (field) {
            let input = document.getElementById(field);
            if (!input || input.value.trim() === "") {
                allFilled = false;
                input.classList.add("is-invalid");
            } else {
                input.classList.remove("is-invalid");
            }
        });

        let ktpInput = document.getElementById("ktp");
        let simInput = document.getElementById("sim");
        let buktiInput = document.getElementById("poster");

        if (ktpInput.files.length === 0 || simInput.files.length === 0 || buktiInput.files.length === 0) {
            allFilled = false;
        }

        if (allFilled) {
            submitBtn.removeAttribute("disabled");
        } else {
            submitBtn.setAttribute("disabled", "true");
        }
    }

    requiredFields.forEach(function (field) {
        let input = document.getElementById(field);
        if (input) {
            input.addEventListener("input", checkFormValidity);
        }
    });

    document.getElementById("ktp").addEventListener("change", checkFormValidity);
    document.getElementById("sim").addEventListener("change", checkFormValidity);
    document.getElementById("poster").addEventListener("change", checkFormValidity);

    // Validasi sebelum submit
    form.addEventListener("submit", function (event) {
        let firstInvalid = document.querySelector(".is-invalid");
        if (firstInvalid) {
            event.preventDefault();
            firstInvalid.scrollIntoView({ behavior: "smooth", block: "center" });
        }
    });
});

</script>
