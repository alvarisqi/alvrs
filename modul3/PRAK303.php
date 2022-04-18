<!DOCTYPE html>
<html>
    <head>
        <title>PRAK303</title>
    </head>
    <body>
        <?php
            if (isset($_POST['submit'])) {
                $nilai1 = $_POST['nilai1'];
                $nilai2 = $_POST['nilai2'];
            } 
        ?>

        <form action = "" method = "POST">
            <div>
                <label for = "">Batas Bawah : </label>
                <input type = "number" name = "nilai1" value="<?php echo $nilai1 ?>"><br>
                <label for = "">Batas Atas : </label>
                <input type = "number" name = "nilai2" value="<?php echo $nilai2 ?>">
            </div>
            <button type = "submit" name = "submit">Cetak</button><br><br>

            <?php
            if (isset($_POST['submit'])) {
                do {
                    if(($nilai1 + 7) % 5 == 0) {
                        echo "<img src='star-images-9441.png' width='18' height='18' /> ";
                    } else {
                        echo $nilai1." ";
                    }
                    $nilai1++;
                } while ($nilai1 <= $nilai2);
            }
            ?>
        </form>
    </body>
</html>