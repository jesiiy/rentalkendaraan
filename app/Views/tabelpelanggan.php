<main id="main" class="main">
      <div class="pagetitle">
        <h1>Table Pelanggan</h1>
      </div>
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pelanggan</h5>
                <a href="<?= base_url('home/inputkendaraan') ?>" class="btn btn-pink">+Tambah</a>
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
                      <th>Nomor KTP</th>
                      <th>Nomor HP</th>
                      <th>Alamat</th>
                      <th>Nomor SIM</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $ms=1;
                    foreach ($takdirestui as $key => $value) {
                    ?>
                    <tr>
                      <td><?= $ms++ ?></td>
                      <td><?= $value->nama_pelanggan ?></td>
                      <td><?= $value->jenis_kelamin ?></td>
                      <td><?= $value->nomor_ktp ?></td>
                      <td><?= $value->no_hp ?></td>
                      <td><?= $value->alamat ?></td>
                      <td><?= $value->nomor_sim ?></td>
                      <td>
                        <a href="<?= base_url('Home/hapuspelanggan/'.$value->id_pelanggan) ?>" class="btn btn-danger">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>

                 <table class="table datatable">
                    <?php if (!empty($deleted_pelanggan)): ?>
                    <h3 class="mt-4">Data Kendaraan yang Dihapus</h3>
                    <thead>
                      <tr>
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Jenis Kelamin</th>
                      <th>Nomor KTP</th>
                      <th>Nomor HP</th>
                      <th>Alamat</th>
                      <th>Nomor SIM</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; foreach ($deleted_pelanggan as $value): ?>
                    <tr>
                      <td><?= $ms++ ?></td>
                      <td><?= $value->nama_pelangan ?></td>
                      <td><?= $value->jenis_kelamin ?></td>
                      <td><?= $value->nomor_ktp ?></td>
                      <td><?= $value->no_hp ?></td>
                      <td><?= $value->alamat ?></td>
                      <td><?= $value->nomor_sim ?></td>
                      <td>
                        <a href="<?= base_url('home/restoreP/' . $value->id_pelanggan) ?>" class="btn btn-success btn-sm" onclick="return confirm('Apakah Anda yakin ingin merestore kendaraan ini?')"><i class="fa fa-undo"></i> Restore</a>
                    </td>
                    </tr>
                     <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">Tidak ada kendaraan yang dihapus.</p>
                <?php endif; ?>

                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>

  <!-- Tambahkan Script -->
  <script>
    document.getElementById("toggleSidebar").addEventListener("click", function() {
        document.body.classList.toggle("sidebar-collapsed");
    });
  </script>