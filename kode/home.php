<!DOCTYPE html>
<html>
<head>
  <title>Beranda</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  .card:hover {
  transform: translateY(-5px);
  transition: transform 0.3s ease;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
</style>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#footer">
      <img src="../bahan1/jualhape store (3).png" alt="Marketplace Logo" height="60" class="mr-2" />
      GADGETGALAXY
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Apple</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Samsung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Vivo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Realme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Xiaomi</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- memerika status pengguna -->
          <?php
          session_start();
          // dimulai dengan belum login
          $loggedIn = false;
// jika sudah login, maka menjadi true
          if (isset($_SESSION['username'])) {
            $loggedIn = true;
          }
// jika status true maka akan pergi ke halaman akun dan jika belum login akan pergi ke halaman login
          if ($loggedIn) {
            echo '<a class="nav-link" href="account.php">';
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
  <!-- isi -->
  <div id="slideslur" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slideslur" data-slide-to="0" class="active"></li>
      <li data-target="#slideslur" data-slide-to="1"></li>
      <li data-target="#slideslur" data-slide-to="2"></li>
      <li data-target="#slideslur" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../bahan1/1.png" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="../bahan1/2.png" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="../bahan1/3.png" class="d-block w-100" alt="Slide 3">
      </div>
      <div class="carousel-item">
        <img src="../bahan1/2.png" class="d-block w-100" alt="Slide 4">
      </div>
    </div>
    <a class="carousel-control-prev" href="#slideslur" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slideslur" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container mt-4">
    <h3>Products</h3>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <a class="nav-link" href="produk0.php">
          <div class="card">
            <img src="../bahan1/samsung/s23/1.png" class="card-img-top" alt="Product 1">
            <div class="card-body">
              <h5 class="card-title">Samsung Galaxy S21</h5>
              <p class="card-text">Price: $999</p>
              <p class="card-text">Sold: 1000+</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <a class="nav-link" href="produk1.php">
          <div class="card">
            <img src="../bahan1/realme/gt neo 2/1.png" class="card-img-top" alt="Product 2">
            <div class="card-body">
              <h5 class="card-title">Realme GT Neo 2</h5>
              <p class="card-text">Price: $599</p>
              <p class="card-text">Sold: 1020+</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <a class="nav-link" href="produk2.php">
          <div class="card">
            <img src="../bahan1/vivo/x80 pro/1.png" class="card-img-top" alt="Product 3">
            <div class="card-body">
              <h5 class="card-title">Vivo X80 Pro</h5>
              <p class="card-text">Price: $779</p>
              <p class="card-text">Sold: 1300+</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <a class="nav-link" href="produk3.php">
          <div class="card">
            <img src="../bahan1/iphone/12pro/1.png" class="card-img-top" alt="Product 4">
            <div class="card-body">
              <h5 class="card-title">Apple iPhone 12</h5>
              <p class="card-text">Price: $1099</p>
              <p class="card-text">Sold: 2000+</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <a class="nav-link" href="produk4.php">
          <div class="card">
            <img src="../bahan1/xiaomi/12/1.png" class="card-img-top" alt="Product 5">
            <div class="card-body">
              <h5 class="card-title">Xiaomi Mi 11</h5>
              <p class="card-text">Price: $799</p>
              <p class="card-text">Sold: 1500+</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <a class="nav-link" href="produk5.php">
          <div class="card">
            <img src="../bahan1/samsung/zflip4/2.png" class="card-img-top" alt="Product 6">
            <div class="card-body">
              <h5 class="card-title">Samsung Galaxy ZFlip4</h5>
              <p class="card-text">Price: $1299</p>
              <p class="card-text">Sold: 4000+</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
<!-- footer -->
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
              <h5 class="mb-4">LAYANAN</h5>
              <ul class="list-unstyled">
                <li><a href="#">Cara Pemesanan</a></li>
                <li><a href="#">Cara Pembayaran</a></li>
                <li><a href="#">Informasi Pengiriman</a></li>
                <li><a href="#">Lacak Pesanan</a></li>
                <li><a href="#">Pembatalan Transaksi</a></li>
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
