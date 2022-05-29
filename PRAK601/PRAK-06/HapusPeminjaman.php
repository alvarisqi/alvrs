<?php
require("model.php");

$id_peminjaman = $_GET["id_peminjaman"];

if(HapusPeminjaman($id_peminjaman)> 0 ){
    echo "
    <script>
    alert('Data berhasil dihapus');
    document.location.href = 'peminjaman.php';
    </script>
    ";
}
else{
    echo "
    <script>
    alert('Data gagal dihapus');
    document.location.href = 'peminjaman.php';
    </script>
    ";
}
?>