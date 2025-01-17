<?php 
include("navbar.php");
?>
<main class="container">
     <div class="row g-5">
    <div class="col-md-8">
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1"><?php echo htmlspecialchars($artikel['nama_artikel']) ?></h2>
        <p class="blog-post-meta"><?php echo htmlspecialchars($artikel['created_at']) ?></p>

        <p><?php echo htmlspecialchars($artikel['artikel']) ?></p>
        <hr>
        <p><?php echo htmlspecialchars($artikel['kategori'])?></p>
    </article>
      <div class="input-group"> 
  <span class="input-group-text">Komentar</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>
    </div>

        <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Portal Berita Terkini dan Terupdate Hanya Di Berita Kos Indah Motor</p>
        </div>

        <div>
          <h4 class="fst-italic">Recent posts</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Example blog post title</h6>
                  <small class="text-body-secondary">January 15, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">This is another blog post title</h6>
                  <small class="text-body-secondary">January 14, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <svg class="bd-placeholder-img" width="100%" height="96" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="col-lg-8">
                  <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                  <small class="text-body-secondary">January 13, 2024</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Sosial Media Kami</h4>
          <ol class="list-unstyled ">
            <li><a class="text-decoration-none text-light" href="#">GitHub</a></li>
            <li><a class="text-decoration-none text-light" href="#">Twitter</a></li>
            <li><a class="text-decoration-none text-light" href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="py-5 text-center text-body-secondary bg-body-tertiary">
  <p class="text-light">Copyright &copy; 2024 |
    <a class="text-decoration-none text-light" href="#home">BERITA KOS INDAH MOTOR</a>
  </p>
</footer>
<script src="bootstrap-5.3.3-examples/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
