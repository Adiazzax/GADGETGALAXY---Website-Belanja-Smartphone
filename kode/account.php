<!-- Digunakan untuk proses logout akun -->
<?php
session_start();
if (isset($_GET['logout'])) {
  unset($_SESSION['username']);
  header("Location: login.php");
  exit();
}
// memeriksa apakah pengguna itu telah login 
$loggedIn = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Akun</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      .account-list li {
        list-style-type: none;
        padding: 10px;
        background-color: #f8f9fa;
        border-radius: 5px;
        margin-bottom: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
      }
      .account-list li:hover {
        background-color: #e9ecef;
      }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#footer">
        <img src="../bahan1/jualhape store (3).png" alt="Marketplace Logo" height="60" class="mr-2" />
        GADGETGALAXY
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <!-- digunakan untuk mengarahkan ke halaman login.php ketika menekan tombol logout -->
            <?php
            if ($loggedIn) {
              echo '<a class="nav-link" href="?logout=true">Logout</a>';
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
<!-- Akhir dari Navbar -->
<!-- Isi -->
    <div class="tengah">
      <div class="container mt-5">
        <ul class="account-list">
          <li>Informasi Profil</li>
          <li>Pengaturan Keamanan</li>
          <li>Pengaturan Privasi</li>
          <li>Riwayat Pembelian</li>
          <li>Alamat Pengiriman</li>
          <li>Pengaturan Notifikasi</li>
        </ul>
      </div>
    </div>
<!-- akhir dari isi -->
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
<!-- akhir dari footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
