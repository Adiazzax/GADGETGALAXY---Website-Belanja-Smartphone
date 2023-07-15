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
            <form method="post" action="koneksi.php">
              <div class="form-group">
                <label for="username">Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  name="username"
                  placeholder="Masukkan username"
                />
                <small class="text-danger" id="username-error"></small>
              </div>
              <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Masukkan kata sandi"
                />
                <small class="text-danger" id="password-error"></small>
              </div>
              <div class="form-group">
                <label for="confirm-password">Konfirmasi Kata Sandi</label>
                <input
                  type="password"
                  class="form-control"
                  id="confirm-password"
                  name="confirm_password"
                  placeholder="Masukkan kembali kata sandi"
                />
                <small class="text-danger" id="confirm-password-error"></small>
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
