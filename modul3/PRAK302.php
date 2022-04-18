<!DOCTYPE html>
<html>
    <head>
        <title>PRAK 302</title>
        <style>
            img{
                width: 25px;
            }
        </style>
    </head>
    <body>
        <?php
        if(isset($_POST['cetak'])){
            $tinggi = $_POST['tinggi'];
            $link = $_POST['link'];
        }
        ?>

        <form action="" method="post">
            <label for = "">Tinggi : </label>
            <input type="number" name="tinggi" value="<?php echo $tinggi ?>"><br>
            <label for = "">Alamat Gambar : </label>
            <input type="url" name="link" value="<?php echo $link ?>"><br>
            <button type="submit" name="cetak">Cetak</button><br><br>
        </form>
    </body>
</html>

<?php
if(isset($_POST['cetak'])) {
    if($tinggi>0) {
        $i = 1;
        while($i <= $tinggi) {
            $j = 1;

            while($j < $i) {
                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; 
                $j++;
            }
            $j = $i;

            while($j <= $tinggi) {
                echo '<img src="'.$link.'"/>';
                $j++;
            }
            
            $i++;
            echo "<br>";
        }
    }
}
?>