<?php
// Mengambil data dari formulir registrasi
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

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

// Siapkan query untuk menyimpan data pengguna
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman login setelah registrasi berhasil
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
