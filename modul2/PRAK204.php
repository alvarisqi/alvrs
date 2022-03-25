<!DOCTYPE html>
<html>
    <head>
        <title>PRAK204</title>
    </head>
    <body>
        <form action = "" method = "POST">
            <div>
                <label for = "">Nilai :</label>
                <input type = "number" name = "nilai">
            </div>
            <button type = "submit" name = "submit">Konversi</button><br>

            <?php
            if(isset($_POST["submit"])) {
                $nilai = $_POST['nilai'];

                if($nilai == 0) {
                    echo "<H2> Hasil : Nol</h2>";
                } else if($nilai < 0) {
                    echo "<h2> Tugasnya gak sampe minus bang </h2>";
                } else if($nilai > 0 and $nilai <= 9) {
                    echo "<h2> Hasil : Satuan</h2>";
                } else if($nilai >= 11 and $nilai <= 19) {
                    echo "<h2>Hasil : Belasan</h2>";
                } else if($nilai == 10 or $nilai >=20 and $nilai <= 99) {
                    echo "<h2>Hasil : Puluhan</h2>";
                } else if($nilai >= 100 and $nilai <= 999) {
                    echo "<h2>Hasil : Ratusan<h2>";
                } else {
                    echo "<h2>Anda Menginput Melebihi Limit Bilangan</h2>";
                }
            }
            ?>
        </form>
    </body>
</html>