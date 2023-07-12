<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akun";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    if ($password !== $confirmPassword) {
        die("Konfirmasi kata sandi tidak sesuai.");
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO usermasuk (username, password) VALUES ('$username', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
