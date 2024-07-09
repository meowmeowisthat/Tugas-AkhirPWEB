<?php
function simpanDataFile($filename, $data) {
    $file = fopen($filename, "a");
    fwrite($file, implode(" | ", $data) . "\n");
    fclose($file);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fields = ['matkul', 'dosen', 'waktu', 'ruang'];
    $data = [];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $data[$field] = $_POST[$field];
        } else {
            $data[$field] = '';
        }
    }

    
    if (empty($data['matkul']) || empty($data['dosen']) || empty($data['waktu']) || empty($data['ruang'])) {
        header("Location: matkul.html?error=emptyfields");
        exit();
    } else {
        simpanDataFile("matakul.txt", $data);
        header("Location: lihat.php?matkul1={$data['matkul']}&nama={$data['dosen']}&jam={$data['waktu']}&kelas={$data['ruang']}");
        exit();
    }
}
?>
