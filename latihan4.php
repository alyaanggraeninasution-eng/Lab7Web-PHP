
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 PHP</title>
</head>
<body>

    <h2>Latihan 4 - Membuat Function</h2>

    <?php
        function hitungDiskon($harga, $persen) {
            $potongan = $harga * ($persen / 100);
            return $harga - $potongan;
        }

        $hargaAkhir = hitungDiskon(150000, 10);

        echo "Harga awal: Rp150.000<br>";
        echo "Diskon: 10%<br>";
        echo "Harga setelah diskon: Rp" .
            number_format($hargaAkhir, 0, ",", ".");
        
        function hitungLuas($panjang, $lebar) {
            return $panjang * $lebar;
        }

        echo "<br><br>Luas persegi panjang: " .
            hitungLuas(8, 4);
    ?>

</body>
</html>
