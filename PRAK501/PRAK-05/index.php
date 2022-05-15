<?php 
require("css.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        .button{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Perpustakaan</h2>
    </div>
    <div class="button">
        <a href="Member.php" class="waves-effect waves-light green btn-large">Data Member</a>
    </div>
    <div class="button">
        <a href="Peminjaman.php" class="waves-effect waves-light aquamarine btn-large">Data Peminjaman</a>
    </div>
    <div class="button">
        <a href="Buku.php" class="waves-effect waves-light blue btn-large">Data Buku</a>
    </div>
</body>
</html>