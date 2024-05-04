<?php
session_start();

// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username Anda
$password = ""; // Ganti dengan password Anda
$dbname = "mydatabase"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menangkap data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Mencari pengguna dengan username yang diberikan
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Login berhasil, set session dan redirect ke halaman beranda
    $_SESSION['username'] = $username;
    header("Location: home.php");
    exit();
} else {
    // Login gagal, redirect kembali ke halaman login
    header("Location: login.html");
    exit();
}

$conn->close();
?>