<!DOCTYPE html>
<html>
<head>
    <title>Tugas if else</title>
</head>
<body>
    <h2>Konversi Nilai</h2>
    <form action="" method="post">
        <input type="number" name="nilai">
        <input type="submit" value="Cek Kategori Nilai">
    </form>
</body>

<?php 

    $nilai=$_POST['nilai']; 
    if ($nilai >= 80) {
        echo "Konversi nilai = A";
    } else if ($nilai >= 70 and $nilai <= 79) {
        echo "Konversi nilai = B";
    } else if ($nilai >= 60 and $nilai <= 69) {
        echo "Konversi nilai = C";
    } else if ($nilai >= 50 and $nilai <= 59) {
        echo "Konversi nilai = D";
    } else if ($nilai <= 50) {
        echo "Konversi nilai = E";
    } else {
        echo "Nilai tidak valid!";
    }

?>