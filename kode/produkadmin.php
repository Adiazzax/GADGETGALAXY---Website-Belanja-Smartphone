<!DOCTYPE html>
<html>
<head>
  <title>Edit Produk</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="homeadmin.php">Home</a>
      </li>
    </ul>
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
  <h3>Edit Produk</h3>
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
      <a class="nav-link" href="edit_produk0.php">
        <div class="card">
          <img src="../bahan1/samsung/s23/1.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Samsung Galaxy S21</h5>
            <p class="card-text">Price: $999</p>
            <p class="card-text">Sold: 1000+</p>
            <a href="#" class="btn btn-primary w-100">Edit</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <a class="nav-link" href="edit_produk1.php">
        <div class="card">
          <img src="../bahan1/realme/gt neo 2/1.png" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Realme GT Neo 2</h5>
            <p class="card-text">Price: $599</p>
            <p class="card-text">Sold: 1020+</p>
            <a href="#" class="btn btn-primary w-100">Edit</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <a class="nav-link" href="edit_produk2.php">
        <div class="card">
          <img src="../bahan1/vivo/x80 pro/1.png" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Vivo X80 Pro</h5>
            <p class="card-text">Price: $779</p>
            <p class="card-text">Sold: 1300+</p>
            <a href="#" class="btn btn-primary w-100">Edit</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <a class="nav-link" href="edit_produk3.php">
        <div class="card">
          <img src="../bahan1/iphone/12pro/1.png" class="card-img-top" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">Apple iPhone 12</h5>
            <p class="card-text">Price: $1099</p>
            <p class="card-text">Sold: 2000+</p>
            <a href="#" class="btn btn-primary w-100">Edit</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <a class="nav-link" href="edit_produk4.php">
        <div class="card">
          <img src="../bahan1/xiaomi/12/1.png" class="card-img-top" alt="Product 5">
          <div class="card-body">
            <h5 class="card-title">Xiaomi Mi 11</h5>
            <p class="card-text">Price: $799</p>
            <p class="card-text">Sold: 1500+</p>
            <a href="#" class="btn btn-primary w-100">Edit</a>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <a class="nav-link" href="edit_produk5.php">
        <div class="card">
          <img src="../bahan1/samsung/zflip4/2.png" class="card-img-top" alt="Product 6">
          <div class="card-body">
            <h5 class="card-title">Samsung Galaxy ZFlip4</h5>
            <p class="card-text">Price: $1299</p>
            <p class="card-text">Sold: 4000+</p>
            <a href="#" class="btn btn-primary w-100">Edit</a>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
</div>
<br><br>
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
            <img src="../bahan1/Footer-payment_25-jan-23_.png" alt="Accepted Payment Methods" height="150">
          </div>
          <div class="col-md-6">
            <h5 class="mb-4">JASA PENGIRIMAN</h5>
            <img src="../bahan1/shipping-footer.png" alt="Shipping Methods" height="80">
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
