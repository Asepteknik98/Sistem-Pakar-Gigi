<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum, redirect ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diagnosa Penyakit Gigi dan Mulut</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <h1>Selamat datang di Sistem Pakar Diagnosa Penyakit Gigi dan Mulut</h1>
    <form action="proses_diagnosa.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="usia">Usia:</label>
        <input type="number" id="usia" name="usia" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea><br><br>

        <h2>Pertanyaan 1:</h2>
        <p>Apakah Anda mengalami nyeri pada gigi?</p>
        <label><input type="radio" name="pertanyaan1" value="ya" required> Ya</label>
        <label><input type="radio" name="pertanyaan1" value="tidak"> Tidak</label><br><br>

        <h2>Pertanyaan 2:</h2>
        <p>Apakah gigi Anda berdarah saat menyikat gigi?</p>
        <label><input type="radio" name="pertanyaan2" value="ya" required> Ya</label>
        <label><input type="radio" name="pertanyaan2" value="tidak"> Tidak</label><br><br>

        <h2>Pertanyaan 3:</h2>
        <p>Apakah Anda mengalami bengkak pada gusi?</p>
        <label><input type="radio" name="pertanyaan3" value="ya" required> Ya</label>
        <label><input type="radio" name="pertanyaan3" value="tidak"> Tidak</label><br><br>

        <h2>Pertanyaan 4:</h2>
        <p>Apakah Anda merasa gigi sensitif terhadap makanan panas atau dingin?</p>
        <label><input type="radio" name="pertanyaan4" value="ya" required> Ya</label>
        <label><input type="radio" name="pertanyaan4" value="tidak"> Tidak</label><br><br>

        <h2>Pertanyaan 5:</h2>
        <p>Apakah Anda sering merasa sakit pada rahang atau sendi rahang?</p>
        <label><input type="radio" name="pertanyaan5" value="ya" required> Ya</label>
        <label><input type="radio" name="pertanyaan5" value="tidak"> Tidak</label><br><br>

        <button type="submit">Diagnosa</button>
    </form>
</body>
</html>
