<?php
require("model.php");

$id_buku = $_GET["id_buku"];

if(HapusBuku($id_buku)> 0 ){
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'buku.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Data gagal dihapus');
    document.location.href = 'buku.php';
    </script>
    ";
}
?>