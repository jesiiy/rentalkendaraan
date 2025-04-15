<main id="main" class="main">
      <div class="pagetitle">
      </div>   
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
<h3>Tambah Kendaraan</h3>
<form action="<?= base_url('home/simpantambah_kendaraan') ?>" method="POST">
<table>
<div class="mk-3">
      </div>
      <div class="mk-3">
        <label for="foto" class="form-label">Foto:</label>
        <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
      </div>
        <div class="mk-3">
      <label for="tipe">Tipe :</label>
      <input type="text" class="form-control" id="tipe" placeholder="Masukan tipe " name="tipe">
    </div>
        <div class="mk-3">
      <label for="merk">Merk :</label>
      <input type="text" class="form-control" id="merk" placeholder="masukan merk " name="merk">
    </div>
    <div class="mk-3">
      <label for="plat">Nomor Plat :</label>
      <input type="text" class="form-control" id="plat" placeholder="masukan nomor " name="plat">
    </div>
    <div class="mk-3">
      <label for="harga">Harga Perhari :</label>
      <input type="text" class="form-control" id="harga" placeholder="masukan nomor " name="harga">
    </div>
        <tr>
       <button type="submit" a href="tabelkendaraan" class="btn btn-primary">Submit</button>
    </tr>
    </tr>
</table>
</div>
</div>
          </div>

        </div>
      </div>
    </section>
    <script>
    document.getElementById("toggleSidebar").addEventListener("click", function() {
        document.body.classList.toggle("sidebar-collapsed");
    });
  </script>