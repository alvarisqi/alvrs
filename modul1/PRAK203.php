<!DOCTYPE html>
  <html>
    <head>
      <title>PRAK203</title>
    </head>

    <body>
      <form action="" method="post">
      Nilai : <input type="number" name="in"> <br>
      Dari : <br>
      <input type="radio" name="suhu" value="Celcius"> Celcius <br>
      <input type="radio" name="suhu" value="Fahrenheit"> Fahrenheit <br>
      <input type="radio" name="suhu" value="Reamur"> Reamur <br>
      <input type="radio" name="suhu" value="Kelvin"> Kelvin <br>
      Ke : <br>
      <input type="radio" name="convert" value="Celcius"> Celcius <br>
      <input type="radio" name="convert" value="Fahrenheit"> Fahrenheit <br>
      <input type="radio" name="convert" value="Reamur"> Reamur <br>
      <input type="radio" name="convert" value="Kelvin"> Kelvin <br>

      <input type="submit" name="submit" value="Konversi">
      </form>
    </body>
  </html>

<?php
  if(isset($_POST["submit"])){
    $input = $_POST['in'];
    $suhu = $_POST['suhu'];
    $convert = $_POST['convert'];
  
    if($suhu == $convert){
      $satuan=$suhu[0];
      echo "<h2> Hasil Konversi : $input °$satuan <h2>";
    } else if (!empty($suhu)){
        if($suhu == "Celcius" && $convert == "Fahrenheit"){
          $temp = ((9/5)*$input)+32;
          $satuan = "F";
        } else if ($suhu == "Celcius" && $convert == "Reamur"){
          $temp = (4/5)*$input;
          $satuan = "R";
        } else if ($suhu == "Celcius" && $convert == "Kelvin"){
          $temp = $input + 273;
          $satuan = "K";
        } else if ($suhu == "Fahrenheit" && $convert == "Celcius"){
          $temp = (5/9)*($input - 32);
          $satuan = "C";
        } else if ($suhu == "Fahrenheit" && $convert == "Reamur"){
          $temp = 4/9 * ($input - 32);
          $satuan = "R";
        } else if ($suhu == "Fahrenheit" && $convert == "Kelvin"){
          $temp = 5/9 * ($input-32) + 273;
          $satuan = "K";
        } else if ($suhu == "Reamur" && $convert == "Celcius"){
          $temp = (5/4) * $input;
          $satuan = "C";
        } else if ($suhu == "Reamur" && $convert == "Fahrenheit"){
          $temp = (9/4)*$input +32;
          $satuan = "F";
        } else if ($suhu == "Reamur" && $convert == "Kelvin"){
          $temp = (5/4)*$input +273;
          $satuan = "K";
        } else if ($suhu == "Kelvin" && $convert == "Celcius"){
          $temp = $input - 273;
          $satuan = "C";
        } else if ($suhu == "Kelvin" && $convert == "Fahrenheit"){
          $temp = 4/5 * ($input - 273);
          $satuan = "F";
        } else if ($suhu == "Kelvin" && $convert == "Reamur"){
          $temp = 9/5 * ($input - 273)+32;
          $satuan = "R";
        } echo "<h2> Hasil Konversi : $temp °$satuan <h2>";
      }else if (empty($suhu)){
        echo 'Pilih suhu nya dulu dong, keluar warning tu loh diatas';
      }
  }
?>