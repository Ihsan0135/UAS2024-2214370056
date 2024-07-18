<?php 
include 'style/navbar.php';
include '../fungsi/koneksi.php';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Artikel</h1>
  </div>
  <form action="../fungsi/update.php" method="post">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Artikel</th>
          <th scope="col">Tag</th>
          <th scope="col">Kategori</th>
          <th scope="col">Artikel</th>
          <th scope="col">Gambar</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT id, nama_artikel, tag, kategori, artikel, gambar FROM artikel";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>" . $no++ . "</th>";
                echo "<td>" . htmlspecialchars($row['nama_artikel']) . "</td>";
                echo "<td>" . htmlspecialchars($row['tag']) . "</td>";
                echo "<td>" . htmlspecialchars($row['kategori']) . "</td>";
                echo "<td><a href='../fungsi/download.php?id=" . $row['id'] . "'>Download</a></td>";
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($row['gambar']) . "' width='50' height='50'/></td>";
                echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a> | <a href='../fungsi/delete.php?id=" . $row['id'] . "'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }

        $conn->close();
        ?>
      </tbody>
    </table>
  </form>
  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
</main>
</div>
</div>
<script src="../bootstrap-5.3.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>
</html>
