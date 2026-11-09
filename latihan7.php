
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 7 PHP</title>
</head>
<body>

    <h2>Latihan 7 - Pengolahan Data Sederhana</h2>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $barang = trim($_POST["barang"] ?? "");
            $hargaInput = $_POST["harga"] ?? "";
            $jumlahInput = $_POST["jumlah"] ?? "";

            if (
                $barang === "" ||
                !is_numeric($hargaInput) ||
                !ctype_digit((string)$jumlahInput) ||
                (float)$hargaInput < 0 ||
                (int)$jumlahInput < 1
            ) {
                $error = "Periksa kembali nama barang, harga, dan jumlah.";
            } else {
                $harga = (float)$hargaInput;
                $jumlah = (int)$jumlahInput;
                $subtotal = $harga * $jumlah;
            }
        }
    ?>

    <form method="POST">

        <label>
            Nama barang:
            <input type="text" name="barang" required>
        </label>

        <br><br>

        <label>
            Harga:
            <input type="number" name="harga"
                   min="0" step="0.01" required>
        </label>

        <br><br>

        <label>
            Jumlah:
            <input type="number" name="jumlah"
                   min="1" step="1" required>
        </label>

        <br><br>

        <button type="submit">Hitung</button>

    </form>

    <?php
        if (isset($error)) {
            echo "<p>" . htmlspecialchars($error) . "</p>";
        } elseif (isset($subtotal)) {
            echo "<h3>Hasil Transaksi</h3>";

            echo "<p>Barang: " .
                htmlspecialchars($barang, ENT_QUOTES, "UTF-8") .
                "</p>";

            echo "<p>Harga: Rp" .
                number_format($harga, 0, ",", ".") .
                "</p>";

            echo "<p>Jumlah: " . $jumlah . "</p>";

            echo "<p>Subtotal: Rp" .
                number_format($subtotal, 0, ",", ".") .
                "</p>";
        }
    ?>

</body>
</html>
