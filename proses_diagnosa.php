<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum, redirect ke halaman login
    header("Location: login.php");
    exit();
}

// Mengambil data dari formulir diagnosa
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$pertanyaan1 = $_POST['pertanyaan1'];
$pertanyaan2 = $_POST['pertanyaan2'];
$pertanyaan3 = $_POST['pertanyaan3'];
$pertanyaan4 = $_POST['pertanyaan4'];
$pertanyaan5 = $_POST['pertanyaan5'];

// Inisialisasi variabel hasil diagnosa
$hasil = '';

// Logika untuk menentukan hasil berdasarkan jawaban
if ($pertanyaan1 == 'ya' && $pertanyaan2 == 'ya' && $pertanyaan3 == 'ya' && $pertanyaan4 == 'ya' && $pertanyaan5 == 'ya') {
    $hasil = "Anda mungkin mengalami periodontitis.";
} elseif ($pertanyaan1 == 'ya' && $pertanyaan2 == 'tidak' && $pertanyaan3 == 'ya' && $pertanyaan4 == 'ya' && $pertanyaan5 == 'ya') {
    $hasil = "Anda mungkin mengalami karies gigi.";
} elseif ($pertanyaan1 == 'tidak' && $pertanyaan2 == 'ya' && $pertanyaan3 == 'ya' && $pertanyaan4 == 'tidak' && $pertanyaan5 == 'tidak') {
    $hasil = "Anda mungkin mengalami gingivitis.";
} elseif ($pertanyaan1 == 'tidak' && $pertanyaan2 == 'tidak' && $pertanyaan3 == 'tidak' && $pertanyaan4 == 'tidak' && $pertanyaan5 == 'tidak') {
    $hasil = "Anda mungkin tidak mengalami masalah gigi dan gusi yang serius.";
} else {
    $hasil = "Kondisi Anda memerlukan pemeriksaan lebih lanjut oleh dokter gigi.";
}

// Simpan data ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diagnosa_penyakit";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Siapkan query untuk menyimpan data
$sql = "INSERT INTO diagnosa (nama, usia, alamat, pertanyaan1, pertanyaan2, pertanyaan3, pertanyaan4, pertanyaan5, hasil) 
        VALUES ('$nama', '$usia', '$alamat', '$pertanyaan1', '$pertanyaan2', '$pertanyaan3', '$pertanyaan4', '$pertanyaan5', '$hasil')";

if ($conn->query($sql) === TRUE) {
    // Jika data berhasil disimpan, redirect ke halaman hasil diagnosa
    header("Location: hasil_diagnosa.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
