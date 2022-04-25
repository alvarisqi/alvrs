<?php
    $mhs = [
        ['nama'=>'Andi', 'nim'=>'2101001','nilaiUts'=>85,'nilaiUas'=>85],
        ['nama'=>'Budi', 'nim'=>'2101002','nilaiUts'=>76,'nilaiUas'=>79],
        ['nama'=>'Tono', 'nim'=>'2101003','nilaiUts'=>50,'nilaiUas'=>41],
        ['nama'=>'Jessica', 'nim'=>'2101004','nilaiUts'=>10,'nilaiUas'=>10]
    ];

    for($i=0; $i < count($mhs); $i++) {

        $mhs[$i]['nilaiAkhir']=($mhs[$i]['nilaiUts']*40/100)+($mhs[$i]['nilaiUas']*60/100);

        if($mhs[$i]['nilaiAkhir']>=80 and $mhs[$i]['nilaiAkhir']<=100) {
            $mhs[$i]['huruf'] = 'A';
        } else if($mhs[$i]['nilaiAkhir']>=70 and $mhs[$i]['nilaiAkhir']<80) {
            $mhs[$i]['huruf'] = 'B';
        } else if($mhs[$i]['nilaiAkhir']>=60 and $mhs[$i]['nilaiAkhir']<70) {
            $mhs[$i]['huruf'] = 'C';
        } else if($mhs[$i]['nilaiAkhir']>=50 and $mhs[$i]['nilaiAkhir']<60) {
            $mhs[$i]['huruf'] = 'D';
        } else if($mhs[$i]['nilaiAkhir']>0 and $mhs[$i]['nilaiAkhir']<50) {
            $mhs[$i]['huruf'] = 'E';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>PRAK 402</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid #000;
            padding: 5px;
        }
        th {
            border: 1px solid #000;
            background-color: #D3D3D3;
            padding: 10px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>

        <?php 
            for($i=0; $i < count($mhs); $i++) {
                echo "<tr>";
                    echo "<td>".$mhs[$i]['nama']."</td>";
                    echo "<td>".$mhs[$i]['nim']."</td>";
                    echo "<td>".$mhs[$i]['nilaiUts']."</td>";
                    echo "<td>".$mhs[$i]['nilaiUas']."</td>";
                    echo "<td>".$mhs[$i]['nilaiAkhir']."</td>";
                    echo "<td>".$mhs[$i]['huruf']."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>