
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 4 - Validasi NIM</title>
</head>
<body>

    <h2>Validasi NIM Mahasiswa</h2>

    <form method="POST">
        <label>Masukkan NIM:</label>
        <input type="text" name="nim">
        <button type="submit">Periksa NIM</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = trim($_POST["nim"]);

        if (empty($nim)) {
            echo "<p>NIM tidak boleh kosong.</p>";
        } elseif (!preg_match("/^[0-9]{9}$/", $nim)) {
            echo "<p>NIM harus terdiri dari tepat 9 angka.</p>";
        } else {
            echo "<p>NIM valid: " . htmlspecialchars($nim) . "</p>";
        }
    }
    ?>

</body>
</html>
