
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 2 PHP</title>
</head>
<body>

    <h2>Eksperimen 2 - Pencarian Nama Mahasiswa</h2>

    <?php
        $mahasiswa = [
            "Alya",
            "Bima",
            "Citra",
            "Doni",
            "Ema",
            "Fajar",
            "Gina"
        ];
    ?>

    <form method="GET" action="">
        <label for="nama">Cari nama mahasiswa:</label>
        <input type="text" id="nama" name="nama" required>
        <button type="submit">Cari</button>
    </form>

    <?php
        if (isset($_GET["nama"])) {
            $cari = trim($_GET["nama"]);

            echo "<h3>Hasil Pencarian</h3>";

            $ditemukan = false;

            foreach ($mahasiswa as $nama) {
                if (stripos($nama, $cari) !== false) {
                    echo htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
                    $ditemukan = true;
                }
            }

            if (!$ditemukan) {
                echo "Nama mahasiswa tidak ditemukan.";
            }
        }
    ?>

</body>
</html>
