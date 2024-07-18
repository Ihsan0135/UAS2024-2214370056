<?php
include '../fungsi/koneksi.php';
include 'style/navbar.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT nama_artikel, tag, kategori FROM artikel WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nama_artikel, $tag, $kategori);
    $stmt->fetch();
    $stmt->close();
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="container text-center">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Artikel</h1>
  </div>
  
      <form action="../fungsi/update.php" method="post">
        <div class="row">
          <div class="col-sm-2 mb-3 text-start">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="">
              <label for="nama_artikel">Nama Artikel:</label>
            </div>
            <div class="">
            <label for="kategori">Kategori:</label>
            </div>
            <div class="">
            <label for="tag">Tag:</label>
            </div>
          </div>
          
          <div class="col-sm-4 mb-3 text-start">
            <div>
              <input type="text" name="nama_artikel" id="nama_artikel" value="<?php echo htmlspecialchars($nama_artikel); ?>">
            </div>
            <div>
              <input type="text" name="tag" id="tag" value="<?php echo htmlspecialchars($tag); ?>">
            </div>
            <div>
              <input type="text" name="kategori" id="kategori" value="<?php echo htmlspecialchars($kategori); ?>">
            </div>
          </div>
          <div class="input-group mb-3">
            <button class="btn btn-primary" type="submit">Update</button>
          </div>
      </form>
   
      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>    
    </div>
  </div> 
</main>
</div>
</div>
<script src="../bootstrap-5.3.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>
</html>