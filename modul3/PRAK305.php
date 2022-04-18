<!DOCTYPE html>
<html>
    <head>
        <title>PRAK 305</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="string">
            <button type="submit" name="submit">submit</button>
        </form>
    </body>
</html>

<?php
if(isset($_POST['submit'])) {

    $string = $_POST['string'];

    echo "<h3>Input:</h3>";
    echo $string;
    echo "<h3>Output:</h3>";

    $panjangString = strlen($string);
    $split = str_split($string);

    for($i = 0; $i < $panjangString; $i++) {

        echo strtoupper($split[$i]);

        for($j = 1; $j < $panjangString; $j++) {
            echo strtolower($split[$i]);
        }
    }
}

