<?php

$dbConn = mysqli_connect('localhost', 'root', '', 'perpus');


if(!$dbConn){
    echo 'Connection error: '. mysqli_connect_error();
}
?>