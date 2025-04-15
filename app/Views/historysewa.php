<main id="main" class="main">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">

            <style>
              .btn-pink {
                background-color: #ff85a2;
                color: white;
                font-weight: bold;
                border-radius: 8px;
                padding: 10px 20px;
                border: none;
                transition: 0.3s ease-in-out;
              }

              .btn-pink:hover {
                background-color: #ff85a2;
                transform: scale(1.05);
              }
            </style>

            <table class="table datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pelanggan</th>
                  <th>Jenis Kelamin</th>
                  <th>KTP</th>
                  <th>SIM</th>
                  <th>No HP</th>
                  <th>Alamat</th>
                  <th>Nama Kendaraan</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Total Harga</th>
                  <th>Durasi</th>
                  <th>Metode</th>
                  <th>Bukti</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  $ms = 1;
                  foreach ($takdirestui as $key => $value) {
                ?>
                  <tr>
                    <td><?= $ms++ ?></td>
                    <td><?= $value->nama_pelanggan ?></td>
                    <td><?= $value->jenis_kelamin ?></td>
                     <td>
                        <img src="<?= base_url('img/' . $value->ktp); ?>" width="50">
                    </td>
                     <td>
                        <img src="<?= base_url('img/' . $value->sim); ?>" width="50">
                    </td>
                    <td><?= $value->no_hp ?></td>
                    <td><?= $value->alamat ?></td>
                    <td><?= $value->merk ?></td>
                    <td><?= $value->tanggal_peminjaman ?></td>
                    <td><?= $value->total_harga ?></td>
                    <td><?= $value->durasi ?></td>
                    <td><?= $value->metode ?></td>
                     <td>
                        <img src="<?= base_url('img/' . $value->bukti); ?>" width="50">
                     </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
  document.getElementById("toggleSidebar").addEventListener("click", function() {
    document.body.classList.toggle("sidebar-collapsed");
  });
</script>
