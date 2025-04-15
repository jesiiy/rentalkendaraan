<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Cetak Sewa</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        
        <!-- Card PRINT -->
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PRINT</h5>
              <form action="<?= base_url('home/tablesewa') ?>" method="post"> 
                <div class="mb-3">
                  <label for="twl">Tanggal Peminjaman Awal :</label>
                  <input type="date" class="form-control" name="ta">
                </div>
                <div class="mb-3">
                  <label for="takr">Tanggal Pengembalian akhir :</label>
                  <input type="date" class="form-control" name="tar">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-info">
                    <i class="fas fa-print"></i> Print
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
        <!-- Card PDF -->
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">PDF</h5>
              <form action="<?= base_url('home/tcpdfsewa') ?>" method="post">
                <div class="mb-3">
                  <label for="twl">Tanggal Peminjaman Awal :</label>
                  <input type="date" class="form-control" name="awal">
                </div>
                <div class="mb-3">
                  <label for="takr">Tanggal Pengembalian akhir :</label>
                  <input type="date" class="form-control" name="akhir">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-danger">
                    <i class="fas fa-file-pdf"></i> PDF
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Card EXCEL -->
        <div class="col-lg-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">EXCEL</h5>
              <form action="<?= base_url('home/excelsewa') ?>" method="post">
                <div class="mb-3">
                  <label for="twl">Tanggal Peminjaman Awal :</label>
                  <input type="date" class="form-control" name="ta">
                </div>
                <div class="mb-3">
                  <label for="takr">Tanggal Pengembalian akhir:</label>
                  <input type="date" class="form-control" name="tar">
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-success">
                    <i class="fas fa-file-excel"></i> Excel
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </section>
</main><!-- End #main -->