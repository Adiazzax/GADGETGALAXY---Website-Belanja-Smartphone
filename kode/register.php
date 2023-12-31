<!-- koneksi database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akun";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$errors = array(); // Array untuk menyimpan pesan kesalahan

// validasi saat register
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($username)) {
        $errors['username'] = "Username harus diisi.";
    }

    if (empty($password)) {
        $errors['password'] = "Kata Sandi harus diisi.";
    }

    if (empty($confirmPassword)) {
        $errors['confirm_password'] = "Konfirmasi Kata Sandi harus diisi.";
    }

    if ($password !== $confirmPassword) {
        $errors['confirm_password'] = "Konfirmasi kata sandi tidak sesuai.";
    }

    if (empty($errors)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usermasuk (username, password) VALUES ('$username', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            $errors['database'] = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
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
            <h2 class="mb-4">Daftar</h2>
            <form method="post" action="">
              <div class="form-group">
                <label for="username">Username</label>
                <input
                  type="text"
                  class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''; ?>"
                  id="username"
                  name="username"
                  placeholder="Masukkan username"
                  value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"
                />
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
                />
                <?php if (isset($errors['password'])) { ?>
                    <small class="text-danger"><?php echo $errors['password']; ?></small>
                <?php } ?>
              </div>
              <div class="form-group">
                <label for="confirm-password">Konfirmasi Kata Sandi</label>
                <input
                  type="password"
                  class="form-control <?php echo isset($errors['confirm_password']) ? 'is-invalid' : ''; ?>"
                  id="confirm-password"
                  name="confirm_password"
                  placeholder="Masukkan kembali kata sandi"
                />
                <?php if (isset($errors['confirm_password'])) { ?>
                    <small class="text-danger"><?php echo $errors['confirm_password']; ?></small>
                <?php } ?>
              </div>
              <div class="form-group">
                <button
                  type="submit"
                  class="btn btn-dark btn-masuk"
                  name="register"
                >
                  Daftar
                </button>
                <br />
              </div>
            </form>
            <div class="form-group">
              <p class="text-center">
                Sudah Punya Akun? <a href="login.php">Masuk</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- var untuk mengambil elemen dengan id -->
    <script>
      function validatePassword() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm-password").value;
        var usernameError = document.getElementById("username-error");
        var passwordError = document.getElementById("password-error");
        var confirmPasswordError = document.getElementById(
          "confirm-password-error"
        );
        var isValid = true;
        // jika username kosong 
        if (username.trim() === "") {
          usernameError.textContent = "Username harus diisi.";
          isValid = false;
        } else {
          usernameError.textContent = "";
        }
        // jika pw kosong
        if (password.trim() === "") {
          passwordError.textContent = "Kata Sandi harus diisi.";
          isValid = false;
        } else {
          passwordError.textContent = "";
        }
        // jika konfir pw kosong
        if (confirmPassword.trim() === "") {
          confirmPasswordError.textContent = "Konfirmasi Kata Sandi harus diisi.";
          isValid = false;
        } else {
          confirmPasswordError.textContent = "";
        }
        // jika isvalid sesuai, maka dilakukan if selanjutnya
        if (isValid) {
          // jika pw dan konfir pw tdk sama maka muncul pesn error
          if (password !== confirmPassword) {
            confirmPasswordError.textContent = "Password tidak sesuai.";
          } else {
            confirmPasswordError.textContent = "";
          }
        }
      }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
