<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Diagnosa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-container {
            max-width: 500px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333333;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #666666;
            margin-bottom: 10px;
        }

        strong {
            color: #e74c3c;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Hasil Diagnosa Anda</h1>
        <?php
        // Hubungkan ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "diagnosa_penyakit";

        // Buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi ke database gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data diagnosa terakhir
        $sql = "SELECT * FROM diagnosa ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data diagnosa
            $row = $result->fetch_assoc();
            $nama = $row["nama"]; // Ambil nama klien dari kolom nama
            $hasil = $row["hasil"]; // Ambil hasil diagnosa dari kolom hasil

            // Tampilkan hasil diagnosa beserta nama klien
            echo "<p>Nama: " . $nama . "</p>";
            echo "<p>Hasil diagnosa:</p>";
            echo "<p><strong>$hasil</strong></p>";
        } else {
            echo "<p>Belum ada data diagnosa.</p>";
        }

        $conn->close();
        ?>
        <div class="footer">
           Fatah Zaim Annafi &copy; 2024 
        </div>
    </div>
</body>
</html>
