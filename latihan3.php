
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 PHP</title>
</head>
<body>

    <h2>Latihan 3 - Perulangan dan Array</h2>

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

        echo "<h3>Daftar Mahasiswa</h3>";
        echo "<ol>";

        foreach ($mahasiswa as $nama) {
            echo "<li>" . htmlspecialchars($nama) . "</li>";
        }

        echo "</ol>";
    ?>

</body>
</html>
