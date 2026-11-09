
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 5 - Tombol Reset</title>
</head>
<body>

    <h2>Form dengan Tombol Reset</h2>

    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama">

        <br><br>

        <label>Program Studi:</label>
        <input type="text" name="prodi">

        <br><br>

        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars(trim($_POST["nama"]));
        $prodi = htmlspecialchars(trim($_POST["prodi"]));

        echo "<h3>Data yang Dikirim</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Program Studi: " . $prodi;
    }
    ?>

</body>
</html>
