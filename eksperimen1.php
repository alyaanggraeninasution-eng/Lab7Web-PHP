
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen 1 PHP</title>
</head>
<body>

    <h2>Eksperimen 1 - Menghitung Nilai Rata-rata</h2>

    <?php
        $tugas = 85;
        $uts = 78;
        $uas = 90;

        $rataRata = ($tugas + $uts + $uas) / 3;

        echo "Nilai Tugas: " . $tugas . "<br>";
        echo "Nilai UTS: " . $uts . "<br>";
        echo "Nilai UAS: " . $uas . "<br>";
        echo "Nilai Rata-rata: " .
            number_format($rataRata, 2);
    ?>

</body>
</html>
