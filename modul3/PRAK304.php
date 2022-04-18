<?php
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    if(isset($_POST['submit'])){
        $jumlah = $_POST['jumlah'];
    }
    if(isset($_POST['tambah'])){
        $jumlah += 1;
    }
    if(isset($_POST['kurang'])){
        $jumlah -= 1;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PRAK 304</title>
        <style>
            img{
                width: 80px;
            }
        </style>
    </head>
    <body>
        <?php
        if($jumlah == NULL):
        ?>

        <form action="" method="post">
            Jumlah bintang <input type="number" name="jumlah">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
            endif;
            if($jumlah != NULL):
        ?>

        <label for = "">Jumlah bintang </label>
        <?= $jumlah; ?><br><br><br>

        <?php
            for($i = 1; $i <= $jumlah; $i++){
                echo "<img src='star-images-9441.png'> ";
            }
        ?>

        <form action="" method="post">
            <input type="text" name="jumlah" value="<?= $jumlah ?>" hidden>   
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
        </form>

        <?php
            endif;
        ?>
    </body>
</html>