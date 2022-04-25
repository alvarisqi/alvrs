<!DOCTYPE html>
<html>
    <head>
        <title>PRAK 401</title>
        <style>
            table{
                border-collapse: collapse;
            }
            td{
                border: 1px solid #000;
                padding: 5px;
            }
        </style>
    </head>

    <body>

        <?php
            $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : '';
            $lebar = isset($_POST['lebar']) ? $_POST['lebar'] : '';
            $str = isset($_POST['str']) ? $_POST['str'] : '';
        ?>

        <form action="" method="post">

            <label for = "">Panjang : </label>
            <input type="number" name="panjang" value="<?php echo $panjang?>">
            <br>
            <label for = "">Lebar : </label>
            <input type="number" name="lebar" value="<?php echo $lebar?>">
            <br>
            <label for = "">Nilai : </label>
            <input type="string" name="str" value="<?php echo $str?>">
            <br>
            <button type="submit" name="submit">Cetak</button>

        </form>

        <table>
            <br>

            <?php
                if(isset($_POST['submit'])) {

                    $hasil = explode(" ", $str);
                    $loop=0;
                    $length=$panjang*$lebar;

                    if($length == count($hasil)) {

                        for($i=0; $i<$panjang; $i++) {

                            echo "<tr>";

                            for($j=0; $j<$lebar; $j++) {
                                echo "<td>";
                                echo $hasil[$loop];
                                $loop++;
                                echo "</td>";
                            }

                            echo "</tr>";

                        }

                    } else {
                        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                    }
                }
            ?>
        </table>
    </body>
</html>