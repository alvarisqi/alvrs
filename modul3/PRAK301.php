<!DOCTYPE html>
<html>
    <head>
        <title>PRAK 301</title>
        <style>
            .genap {color: green;}
            .ganjil {color: red;}
        </style>
    </head>
    <body>
        <?php
            if(isset($_POST['cetak'])) {
                $jumlah = $_POST["jumlah"];
            }
        ?>

        <form action="" method="post">
            <label for = "">Jumlah Peserta : </label>
            <input type="number" name="jumlah" value="<?php echo $jumlah ?>">
            <br>
            <button type="submit" name="cetak">Cetak</button>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['cetak'])) {
        $i = 1;
        while($i <= $jumlah) {
            if($i % 2 == 0) {
                echo "<h2><span class='genap'>Peserta ke-$i<br></span><h2>";
            } else {
                echo "<h2><span class='ganjil'>Peserta ke-$i<br></span><h2>";
            }
            $i++;
        }
    }
?>