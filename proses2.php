<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matkul2 = $_POST['matkul'];
    $nama2 = $_POST['dosen'];
    $dl = $_POST['tenggat'];
    $kind = $_POST['jenis'];


    $file = fopen("Tugas1.txt", "a");
    fwrite($file, "$matkul2 | $nama2 | $dl | $kind\n");
    fclose($file);
    
    header("Location: lihat2.php?matkul2=$matkul2&nama2=$nama2&dl=$dl&kind=$kind");
    exit();
}
?>
