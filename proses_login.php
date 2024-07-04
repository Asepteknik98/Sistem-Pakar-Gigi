<?php
session_start(); // Mulai session untuk menyimpan informasi login

// Mengambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Buat koneksi ke database
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "diagnosa_penyakit";
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Siapkan query untuk mencari pengguna dengan username yang sesuai
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Verifikasi password
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Jika login berhasil, set session dan redirect ke halaman yang diinginkan
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Ganti index.php dengan halaman yang diinginkan setelah login berhasil
        exit();
    } else {
        echo "Password salah.";
    }
} else {
    echo "Username tidak ditemukan.";
}

$conn->close();
?>
