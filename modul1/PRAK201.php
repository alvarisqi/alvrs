<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum Web II</title>
    </head>
    <body>
        <form action="" method="post">
        Nama: 1 <input type="text" name="nama1" > <br>
        Nama: 2 <input type="text" name="nama2" > <br>
        Nama: 3 <input type="text" name="nama3" > <br>
        <input type="submit" value="Urutkan">
        </form>
    <?php
        $input1 = $_POST['nama1'];
        $input2 = $_POST['nama2'];
        $input3 = $_POST['nama3'];

        if ($input1 < $input2 && $input1 < $input3 && $input2 < $input3){
            echo "".$input1."<br>";
            echo "".$input2."<br>";
            echo "".$input3."<br>";
        } else if ($input1 < $input2 && $input1 < $input3 && $input2 > $input3){
            echo "".$input1."<br>";
            echo "".$input3."<br>";
            echo "".$input2."<br>";
        } else if ($input2 < $input1 && $input2 < $input3 && $input1 < $input3){
            echo "".$input2."<br>";
            echo "".$input1."<br>";
            echo "".$input3."<br>";
        } else if ($input2 < $input1 && $input2 < $input3 && $input1 > $input3){
            echo "".$input2."<br>";
            echo "".$input3."<br>";
            echo "".$input1."<br>";
        } else if ($input3 < $input1 && $input3 < $input2 && $input1 < $input2){
            echo "".$input3."<br>";
            echo "".$input1."<br>";
            echo "".$input2."<br>";
        } else if ($input3 < $input1 && $input3 < $input2 && $input1 > $input2){
            echo "".$input3."<br>";
            echo "".$input2."<br>";
            echo "".$input1."<br>";
        } else {
            echo "Tidak mungkin untuk diurutkan";
        }
    ?>
    </body>
</html>