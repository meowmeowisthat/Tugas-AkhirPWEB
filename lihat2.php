<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="ini.css">
</head>
<body>
    <h1 class="lihat">Daftar Tugas</h1>
    <div class="display">
    <?php
    if (isset($_GET['matkul2']) && isset($_GET['nama2']) && isset($_GET['dl']) && isset($_GET['kind'])) {
        $matkul3 = $_GET['matkul2'];
        $nama3 = $_GET['nama2'];
        $led = $_GET['dl'];
        $jenisapa = $_GET['kind'];

        echo "<br><br>";
        echo "<p>Mata Kuliah : $matkul3</p>";
        echo "<p>Dosen : $nama3</p>";
        echo "<p>Deadline Tugas : $led</p>";
        echo "<p>Jenis : $jenisapa</p>";
    } else {
        echo "<p>Tidak Ada Inputan.</p>";
    }
    echo "<br><br><br>";
    echo "<a href=tugas.html>Klik disini untuk Input lagi </a>";
    echo "<br>";
    echo "<a href=index.html>Klik disini untuk kembali ke laman awal </a>";
    ?>
    </div>
</body>
</html>
