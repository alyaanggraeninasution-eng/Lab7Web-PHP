
<?php
    $data = null;
    $error = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nama = trim($_POST["nama"] ?? "");
        $nim = trim($_POST["nim"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");
        $semesterInput = $_POST["semester"] ?? "";
        $email = trim($_POST["email"] ?? "");

        // Validasi nama
        if ($nama === "") {
            $error[] = "Nama wajib diisi.";
        }

        // Validasi NIM
        if ($nim === "") {
            $error[] = "NIM wajib diisi.";
        }

        // Validasi program studi
        if ($prodi === "") {
            $error[] = "Program studi wajib diisi.";
        }

        // Validasi email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "Format email tidak valid.";
        }

        // Validasi semester
        if (
            !ctype_digit((string)$semesterInput) ||
            (int)$semesterInput < 1 ||
            (int)$semesterInput > 14
        ) {
            $error[] = "Semester harus berupa angka 1-14.";
        }

        // Jika tidak ada kesalahan
        if (!$error) {
            $data = compact("nama", "nim", "prodi", "email");
            $data["semester"] = (int)$semesterInput;
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project Data Mahasiswa</title>
</head>
<body>

    <h2>Formulir Data Mahasiswa</h2>

    <form method="POST" action="">

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <br><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <br><br>

        <label for="prodi">Program Studi:</label>
        <input type="text" id="prodi" name="prodi" required>

        <br><br>

        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester"
               min="1" max="14" step="1" required>

        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <br><br>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>

    </form>

    <?php
        // Menampilkan semua pesan kesalahan
        if ($error) {
            echo "<h3>Terjadi Kesalahan:</h3>";
            echo "<ul>";

            foreach ($error as $pesan) {
                echo "<li>" .
                    htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") .
                    "</li>";
            }

            echo "</ul>";
        }

        // Menampilkan data jika valid
        if ($data !== null) {
            echo "<h3>Data Mahasiswa Berhasil Diterima</h3>";

            echo "Nama: " .
                htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") .
                "<br>";

            echo "NIM: " .
                htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") .
                "<br>";

            echo "Program Studi: " .
                htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") .
                "<br>";

            echo "Semester: " . $data["semester"] . "<br>";

            echo "Email: " .
                htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8");
        }
    ?>

</body>
</html>
