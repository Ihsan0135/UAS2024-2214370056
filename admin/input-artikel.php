<?php 
include'style/navbar.php';
include '../fungsi/koneksi.php'; // Ganti dengan file koneksi database Anda
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Artikel</h1>
  </div>
  <form action="../fungsi/input.php" method="post" enctype="multipart/form-data">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Nama Artikel" name="nama_artikel" required>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Tag" name="tag">
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Kategori" name="kategori">
    </div>
    <div class="input-group mb-3">
      <input type="file" class="form-control" name="artikel_file" required>
      <label class="input-group-text">Artikel</label>
    </div>
    <div class="input-group mb-3">
      <input type="file" class="form-control" name="gambar_file">
      <label class="input-group-text">Gambar</label>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>

  </div>
</div>
<script src="../bootstrap-5.3.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
