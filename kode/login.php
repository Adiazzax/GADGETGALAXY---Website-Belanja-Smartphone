<!-- koneksi database -->
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akun";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// metode login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $errors = array();
    $isValid = true;

    if (empty($username)) {
        $errors['username'] = "Username harus diisi.";
        $isValid = false;
    }

    if (empty($password)) {
        $errors['password'] = "Kata Sandi harus diisi.";
        $isValid = false;
    }
// memvalidasi pengguna melalui akun yang dimasukkan
    if ($isValid) {
        $sql = "SELECT * FROM usermasuk WHERE username='$username'";
        $result = $conn->query($sql);
// berfungsi apakah username sesuai dg database atau tidak.
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // mengecek apakah pw sesuai dengan databasse, jika iya maka var username akan dibuat
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $username;
                // jika login sbg admin maka akan masuk ke halaman homeadmin.php
                if ($username === 'admin' && $password === 'admin123') {
                    header("Location: homeadmin.php");
                } else {
                  // jika login sbg pengguna akan login ke home.php
                    header("Location: home.php");
                }
                exit();
            } else {
              // jika pw salah maka akan menampilkan pesan error
                $errors['password'] = "Password salah.";
            }
        } else {
          // jika username salah maka akan menampilkan pesan error
            $errors['username'] = "Username tidak ditemukan.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css" />
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  />
  <style>
    .tengahh {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .gambar {
      max-height: 50vh;
    }
    .btn-daftar {
      background-color: #fff;
      color: #212529;
      border-color: #212529;
      width: 100%;
    }
    .btn-google {
      background-color: #fff;
      color: #db4437;
      border-color: #db4437;
      width: 100%;
    }
    .btn-facebook {
      background-color: #fff;
      color: #3b5998;
      border-color: #3b5998;
      width: 100%;
    }
    .btn-masuk {
      background-color: #212529;
      color: #fff;
      border-color: #212529;
      width: 100%;
    }
  </style>
</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="#footer">
      <img
        src="../bahan1/jualhape store (3).png"
        alt="Marketplace Logo"
        height="60"
        class="mr-2"
      />
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
  <div class="tengahh">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6">
          <img
            src="../bahan1/login.d67fd5f.png"
            alt="Login Image"
            class="img-fluid gambar"
          />
        </div>
        <div class="col-md-6">
          <h2 class="mb-4">Masuk</h2>
          <form method="POST" action="">
            <div class="form-group">
              <label for="username">Username</label>
               <input
                  type="username"
                  class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''; ?>"
                  id="username"
                  name="username"
                  placeholder="Masukkan username"
                  value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"
                />
                <!-- mencegah hilangnya value yang telah dimasukkan -->
                <!-- pesan error -->
                <?php if (isset($errors['username'])) { ?>
                    <small class="text-danger"><?php echo $errors['username']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
              <label for="password">Kata Sandi</label>
             <input
                  type="password"
                  class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>"
                  id="password"
                  name="password"
                  placeholder="Masukkan kata sandi"
                  value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>"
                />
                <!-- mencegah hilangnya value yang telah dimasukkan -->
                <!-- pesan error -->
                <?php if (isset($errors['password'])) { ?>
                    <small class="text-danger"><?php echo $errors['password']; ?></small>
                <?php } ?>
            </div>
            <div class="form-group">
              <a href="forgot-password.php">Lupa kata sandi?</a>
            </div>
            <div class="form-group">
              <button
                type="submit"
                class="btn btn-dark btn-masuk"
                name="login"
              >
                Masuk
              </button>
              <br />
              <button
                type="button"
                class="btn btn-white btn-daftar mt-3"
                onclick="window.location.href = 'register.php';"
              >
                Daftar
              </button>
            </div>
            <center>
              <p>atau</p>
            </center>
            <div class="form-group">
              <button type="button" class="btn btn-outline-danger btn-google">
                <img
                  src="../bahan1/pngegg (1).png"
                  alt="Google Logo"
                  height="20"
                  class="mr-1"
                />
                Masuk dengan Google
              </button>
              <br />
              <button
                type="button"
                class="btn btn-outline-primary mt-3 btn-facebook"
              >
                <img
                  src="../bahan1/pngegg.png"
                  alt="Facebook Logo"
                  height="20"
                  class="mr-1"
                />
                Masuk dengan Facebook
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
