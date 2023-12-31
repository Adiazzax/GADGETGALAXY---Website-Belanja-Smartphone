<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <!-- koneksi database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akun";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = "SELECT * FROM usermasuk WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $loggedIn = true;
    header("Location: account.php");
    exit();
  } else {
    echo "<p>Username atau password salah.</p>";
  }
}
// memulai sesi untuk mengecek apakah pengguna sudah login atau belum
session_start();
$loggedIn = false;

if (isset($_SESSION['username'])) {
  $loggedIn = true;
}

?>
<!-- navbar -->
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
    </div>
  </nav>
  <!-- isi -->
  <div class="container mt-5">
    <br><br><br>
    <h2 class="text-center">Pembayaran</h2>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <h4>Detail Produk</h4>
        <div class="row">
          <div class="col-md-4">
            <img src="" alt="Gambar Produk" class="img-fluid" id="product-image">
          </div>
          <div class="col-md-8">
            <h5 class="product-title" id="product-title">-</h5>
            <h5 class="total-price" id="total-price" data-harga="999">Total Harga: $999</h5>

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <h4>Informasi Pembayaran</h4>
        <form action="bayar.php" method="post" onsubmit="return validateForm()" id="bayarForm">
          <div class="form-group">
            <label for="alamat">Alamat Pengiriman</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat pengiriman"></textarea>
            <small id="alamat-error" class="text-danger"></small>
          </div>
          <div class="form-group">
            <label for="kode-voucher">Kode Voucher</label>
            <input type="text" class="form-control" id="kode-voucher" name="kode_voucher" placeholder="Masukkan kode voucher">
          </div>
          <div class="form-group">
            <label for="jumlah-pembelian">Jumlah Pembelian</label>
            <input type="number" class="form-control" id="jumlah-pembelian" name="jumlah_pembelian" min="1" value="1" onchange="updateTotalPrice()">
          </div>
          <div class="form-group">
            <label for="metode-pembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metode-pembayaran" name="metode_pembayaran">
              <option value="transfer">Transfer Bank</option>
              <option value="kartu-kredit">Kartu Kredit</option>
              <option value="e-wallet">E-Wallet</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block" id="bayarButton">Bayar</button>
        </form>
      </div>
    </div>
  </div>

  <br>
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

  <!-- Pop-up info -->
  <div class="modal fade" id="loginPopup" tabindex="-1" role="dialog" aria-labelledby="loginPopupLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginPopupLabel">Anda Belum Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Anda harus login terlebih dahulu sebelum melanjutkan pembayaran.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="window.location.href = 'login.php';">OK</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // supaya form alamat wajib diisi
    function validateForm() {
      var alamat = document.getElementById('alamat').value;
      alamat = alamat.trim();

      if (alamat === '') {
        document.getElementById('alamat-error').textContent = 'Alamat pengiriman harus diisi!';
        return false;
      } else {
        document.getElementById('alamat-error').textContent = '';
      }

      return true;
    }
// fungsi aritmatika utk menghitung jumlalh pembelian sesuai inputan jumlah produk yg dibeli
    function updateTotalPrice() {
      var jumlahPembelian = parseInt(document.getElementById('jumlah-pembelian').value);
      var totalPrice = document.getElementById('total-price');
      var hargaProdukAwal = parseFloat(totalPrice.dataset.harga);
      var hargaProduk = hargaProdukAwal * jumlahPembelian;

      totalPrice.textContent = 'Total Harga: $' + hargaProduk.toFixed(2);
    }
// ketika jumlah produk diubah, maka function updatetotalprice akna dipanggil
    document.getElementById('jumlah-pembelian').addEventListener('input', updateTotalPrice);
// memvalidasi formulir pembayaran, 
// memeriksa status login pengguna, dan menangani tindakan yang sesuai berdasarkan kondisi tersebut.
    document.getElementById('bayarButton').addEventListener('click', function(e) {
      e.preventDefault();

      var form = document.getElementById('bayarForm');
      var alamatInput = document.getElementById('alamat');
      var loginPopup = document.getElementById('loginPopup');

      var errors = validateForm();
      if (errors === true) {
        // Cek apakah pengguna telah login
        var loggedIn = <?php echo ($loggedIn ? 'true' : 'false'); ?>;

        if (loggedIn) {
          // Jika pengguna telah login, lanjutkan ke halaman bayar.php
          form.submit();
        } else {
          // Jika pengguna belum login, tampilkan pop-up "Harus login terlebih dahulu" dan arahkan ke halaman login.php setelah menekan tombol "OK"
          $('#loginPopup').modal('show');
        }
      } else {
        // Tampilkan pesan error di form
        alamatInput.classList.remove('is-invalid');
        document.getElementById('alamat-error').textContent = 'Alamat pengiriman harus diisi!';
      }
    });
// mengambil elemen melalui id untuk ditampilkan kembali
    var productImage = document.getElementById('product-image');
    var productTitle = document.getElementById('product-title');
    var totalPrice = document.getElementById('total-price');
// menjadikan var product utk switch case
    var urlParams = new URLSearchParams(window.location.search);
    var product = urlParams.get('product');
// SC digunakan utk menentukan produk apa yang akan ditampilkan sesuai dengan halaman sebelumnya
    switch (product) {
      case '0':
        productImage.src = '../bahan1/samsung/s23/1.png';
        productTitle.textContent = 'Samsung Galaxy S21';
        totalPrice.textContent = 'Total Harga: $999';
        totalPrice.dataset.harga = '999';
        break;
      case '1':
        productImage.src = '../bahan1/realme/gt neo 2/1.png';
        productTitle.textContent = 'Realme GT Neo 2';
        totalPrice.textContent = 'Total Harga: $599';
        totalPrice.dataset.harga = '599';
        break;
      case '2':
        productImage.src = '../bahan1/vivo/x80 pro/1.png';
        productTitle.textContent = 'Vivo X80 Pro';
        totalPrice.textContent = 'Total Harga: $779';
        totalPrice.dataset.harga = '779';
        break;
      case '3':
        productImage.src = '../bahan1/iphone/12pro/1.png';
        productTitle.textContent = 'Apple Iphone 12 Pro';
        totalPrice.textContent = 'Total Harga: $1099';
        totalPrice.dataset.harga = '1099';
        break;
      case '4':
        productImage.src = '../bahan1/xiaomi/12/1.png';
        productTitle.textContent = 'Xiaomi MI 11';
        totalPrice.textContent = 'Total Harga: $799';
        totalPrice.dataset.harga = '799';
        break;
      case '5':
        productImage.src = '../bahan1/samsung/zflip4/4.png';
        productTitle.textContent = 'Samsung Galaxy ZFlip4';
        totalPrice.textContent = 'Total Harga: $1299';
        totalPrice.dataset.harga = '1299';
        break;
      default:
        productImage.src = '';
        productTitle.textContent = '-';
        totalPrice.textContent = 'Total Harga: $0';
        totalPrice.dataset.harga = '0';
        break;
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
