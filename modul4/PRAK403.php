<?php
    $mhs = [
        ['no'=>1, 'nama'=>'Ridho', 'matkul'=>[
            ['nama_mk'=>'Pemrograman I', 'sks'=>2],
            ['nama_mk'=>'Praktikum Pemrograman I', 'sks'=>1], 
            ['nama_mk'=>'Pengantar Lingkungan Lahan Basah', 'sks'=>2],
            ['nama_mk'=>'Arsitektur Komputer', 'sks'=>3]
        ]
    ],
        ['no'=>2, 'nama'=>'Ratna', 'matkul'=>[
            ['nama_mk'=>'Basis Data I', 'sks'=>2],
            ['nama_mk'=>'Praktikum Basis Data I', 'sks'=>2],
            ['nama_mk'=>'Kalkulus', 'sks'=>3]
        ]
    ],
        ['no'=>3, 'nama'=>'Tono', 'matkul'=>[
            ['nama_mk'=>'Rekayasa Perangkat Lunak', 'sks'=>1],
            ['nama_mk'=>'Analisis dan Perancangan Sistem', 'sks'=>1],
            ['nama_mk'=>'Komputasi Awan', 'sks'=>1],
            ['nama_mk'=>'Kecerdasan Bisnis', 'sks'=>1]
        ]
    ]
    ];

    for($i=0; $i<count($mhs); $i++) {

        $mhs[$i]['total_sks']=0;

        for($j=0; $j<count($mhs[$i]['matkul']); $j++) {
            $mhs[$i]['total_sks']+=$mhs[$i]['matkul'][$j]['sks'];
        }

        if($mhs[$i]['total_sks']<7){
            $mhs[$i]['keterangan'] = 'Revisi KRS';
        } else {
            $mhs[$i]['keterangan'] = 'Tidak Revisi';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PRAK 403</title>
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
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>

            <?php
                for($i=0; $i<count($mhs); $i++) {
                    
                    for($j=0; $j<count($mhs[$i]['matkul']); $j++) {

                        echo "<tr>";
                            
                        if($j == 0) {

                            echo "<td>".$mhs[$i]['no']."</td>";
                            echo "<td>".$mhs[$i]['nama']."</td>";
                            echo "<td>".$mhs[$i]['matkul'][$j]['nama_mk']."</td>";
                            echo "<td>".$mhs[$i]['matkul'][$j]['sks']."</td>";
                            echo "<td>".$mhs[$i]['total_sks']."</td>";

                            if($mhs[$i]['total_sks']<7) {
                                echo "<td style='background-color: #FF0000';>".$mhs[$i]['keterangan']."</td>";
                            }

                            if($mhs[$i]['total_sks']>=7) {
                                echo "<td style='background-color: #03C04A';>".$mhs[$i]['keterangan']."</td>";
                            }         
                        }
                                
                        if($j > 0) {
                            echo "<td>"."</td>";
                            echo "<td>"."</td>";
                            echo "<td>".$mhs[$i]['matkul'][$j]['nama_mk']."</td>";
                            echo "<td>".$mhs[$i]['matkul'][$j]['sks']."</td>";
                            echo "<td>"."</td>";
                            echo "<td>"."</td>";
                        }

                        echo "<tr>";
                    }
                }   
            ?>    
        </table>
    </body>
</html>