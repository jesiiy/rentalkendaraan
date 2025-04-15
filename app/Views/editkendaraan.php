<main id="main" class="main">
    <h4 class="text-center">Form Edit Kendaraan</h4>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="<?= base_url('home/simpanedit_kendaraan') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto:</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe Kendaraan:</label>
                        <input type="text" class="form-control" id="tipe" placeholder="Masukkan Tipe Kendaraan" name="tipe" value="<?= $takdirestui->tipe?>">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk:</label>
                        <input type="text" class="form-control" id="genre" placeholder="Masukkan Merk" name="merk" value="<?= $takdirestui->merk?>">
                    </div>
                    <div class="mb-3">
                        <label for="plat" class="form-label">Nomor Plat:</label>
                        <input type="text" class="form-control" id="durasi" placeholder="Masukkan Nomor Plat" name="plat" value="<?= $takdirestui->nomor_plat?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Perhari:</label>
                        <input type="text" class="form-control" id="rating" placeholder="Masukkan harga" name="harga" value="<?= $takdirestui->harga?>">
                    </div>
                    <div class="mb-3">
                  <label for="status"class="form-label">Status:</label>
                  <select class="form-control" name="status" value="<?= $takdirestui->status?>">
                    <option>-Pilih Status </option>
                    <option value="Tidak Tersedia">Tersedia</option>
                    <option value="Tersedia">Disewa</option>
                  </select>
                </div>
                    <input type="hidden" value="<?= $takdirestui->id_kendaraan ?>" name="idkendaraan">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>
<script>
    document.getElementById("toggleSidebar").addEventListener("click", function() {
        document.body.classList.toggle("sidebar-collapsed");
    });
  </script>