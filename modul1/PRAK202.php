<?php
    $nameError = $nimError = $GenError = "";
    $name = $nim = $Gen = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nama"])){
            $nameError = "Nama tidak boleh kosong";
        } else {
            $name = test_input($_POST["nama"]);
        }

        if(empty($_POST["NIM"])){
            $nimError = "NIM tidak boleh kosong";
        } else {
            $nim = test_input($_POST["NIM"]);
        }

        if(empty($_POST["gender"])){
            $GenError = "Jenis kelamin tidak boleh kosong";
        } else {
            $Gen = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PRAK202</title>
    </head>
    <style>
        .error {
            color: red;
        }
    </style>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Nama : <input type="text" name="nama" value="<?php echo $name ?>">
            <span class="error"> * <?php echo $nameError; ?></span> <br>
            NIM  : <input type="number" name="NIM" value="<?php echo $nim ?>">
            <span class="error"> * <?php echo $nimError; ?> </span> <br>
            Jenis Kelamin :
                <span class="error"> * <?php echo $GenError;?></span> <br>
                <input type="radio" id="lakilaki" name="gender" value="Laki-Laki">Laki-Laki<br>
                <input type="radio" id="perempuan" name="gender" value="Perempuan">Perempuan <br>  
            <input type="submit" name="Submit" value="Submit"> <br>
        </form>
        <?php
            if(!empty($name) && !empty($nim) && !empty($Gen)){
                echo "".$name."<br>";
                echo "".$nim."<br>";
                echo "".$Gen."<br>";
            }
        ?>
    </body>
</html>