<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <link rel="stylesheet" href="ini.css">
</head>
<body>
    <h1 class="lihat">Daftar Mata Kuliah</h1>
    <div class="tampilan">
    <?php
    $params = ['matkul1', 'nama', 'jam', 'kelas'];
    $data = [];

    foreach ($params as $param) {
        if (isset($_GET[$param])) {
            $data[$param] = $_GET[$param];
        } else {
            $data[$param] = null;
        }
    }

    function cetakData($data) {
        if ($data['matkul1'] && $data['nama'] && $data['jam'] && $data['kelas']) {
            echo "<br><br>";
            echo "<p>Mata Kuliah : {$data['matkul1']}</p>";
            echo "<p>Dosen : {$data['nama']}</p>";
            echo "<p>Jam : {$data['jam']}</p>";
            echo "<p>Ruang No : {$data['kelas']}</p>";
        } else {
            echo "<p>Tidak Ada Inputan.</p>";
        }
    }

    cetakData($data);

    echo "<br><br><br>";
    echo "<a href='matkul.html'>Klik disini untuk Input lagi</a>";
    echo "<br>";
    echo "<a href='index.html'>Klik disini untuk kembali ke laman awal</a>";
    ?>
    </div>
</body>
</html>
