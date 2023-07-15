<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda Admin</title>
  <link rel="stylesheet" href="style.css">
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#footer">
      <img src="../bahan1/jualhape store (3).png" alt="Marketplace Logo" height="60" class="mr-2" />
      GADGETGALAXY
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php
          session_start();
          $loggedIn = false;

          if (isset($_SESSION['username'])) {
            $loggedIn = true;
          }

          if ($loggedIn) {
            echo '<a class="nav-link" href="akunadmin.php">';
            echo '<img src="../bahan1/icon-user.png" alt="Account Icon" height="25" class="mr-1" />';
            echo '</a>';
          } else {
            echo '<a class="nav-link" href="login.php">';
            echo '<img src="../bahan1/icon-user.png" alt="Account Icon" height="25" class="mr-1" />';
            echo '</a>';
          }
          ?>
        </li>
      </ul>
    </div>
  </nav>

  <div class="tengah">
    <div class="container mt-4">
      <h1>Selamat Datang, Penjual Profesional!</h1>
      <div class="row mt-4">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manajemen Produk</h5>
              <p class="card-text">
                Anda memiliki akses penuh untuk mengelola produk Anda dengan
                fitur-fitur canggih.
              </p>
              <a href="produkadmin.php" class="btn btn-primary">Lihat Produk</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Analisis Penjualan</h5>
              <p class="card-text">
                Dapatkan wawasan mendalam tentang penjualan Anda melalui grafik
                dan laporan interaktif.
              </p>
              <a href="analisisProduk.php" class="btn btn-primary">Lihat Analisis</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br>

  <footer class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="#">
            <img src="../bahan1/jualhape store (2).png" alt="Marketplace Logo" height="200">
          </a>
          <p class="mt-3">"GADGETGALAXY adalah destinasi utama bagi pecinta teknologi untuk menjelajahi dan menemukan dunia smartphone terkini. Dengan koleksi terlengkap dari merek terkemuka dan inovasi terbaru, kami hadir untuk memberikan pengalaman belanja yang mengesankan dan memenuhi kebutuhan digital Anda. Dengan komitmen kami pada kualitas, layanan pelanggan yang unggul, dan ketertarikan terhadap perkembangan teknologi terbaru, GADGETGALAXY menjadi rekan setia Anda dalam menjelajahi galaksi smartphone. Selamat datang di GADGETGALAXY, tempat dimana teknologi bertemu dengan gaya!"</p>
          <p>Jika Anda ingin bantuan atau memiliki masukan, silahkan hubungi kami:</p>
          <ul>
            <li>Jam 9:30 - 17:30 (Senin s.d. Jumat)</li>
            <li>Jam 9:30 - 15:00 (Sabtu)</li>
            <li>Email : <a href="mailto:adiazzax@gmail.com">customercare@ggglx.com</a></li>
            <li>Phone : 150098</li>
            <li>WA : 0812 3456 7890</li>
          </ul>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6">
              <h5 class="mb-4">INFORMASI</h5>
              <ul class="list-unstyled">
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Privasi</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <h5 class="mb-4">LAYANAN PENJUAL</h5>
              <ul class="list-unstyled">
                <li><a href="#">Manajemen Produk</a></li>
                <li><a href="#">Kelola Stok</a></li>
                <li><a href="#">Pesanan Masuk</a></li>
                <li><a href="#">Pengaturan Akun</a></li>
              </ul>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md-6">
              <h5 class="mb-4">KAMI MENERIMA</h5>
              <img src="../bahan1/Footer-payment_25-jan-23_.png" height="150">
            </div>
            <div class="col-md-6">
              <h5 class="mb-4">JASA PENGIRIMAN</h5>
              <img src="../bahan1/shipping-footer.png" height="80">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
