<!DOCTYPE html>
<html>
    <head>
        <title>PRAK105</title>
        <?php
            $smartphone = array("001"=>"Samsung Galaxy S22","002"=>"Samsung Galaxy S22+","003"=>"Samsung Galaxy A03","004"=>"Samsung Galaxy Xcover 5");    
        ?>

        <style>
            table,th,td {
                border: 2px solid;
            }
            th {
                font-size: x-large;
                background-color: red;
                height: 60px;
            }
            td {
                font-size: 110%;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>
                    Daftar Smartphone Samsung
                </th>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $smartphone["001"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $smartphone["002"];
                    ?>                
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $smartphone["003"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo $smartphone["004"];
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>