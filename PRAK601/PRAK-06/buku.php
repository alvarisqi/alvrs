<?php
require("model.php");
require("css.php");
$buku = getData("buku");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Buku</title>
</head>

<body>
    <h1>Daftar Buku</h1>
    <div class="buttonadd">
        <a href="FormBuku.php" class="waves-effect waves-light blue btn-large">Tambah Data Buku</a>
        <a href="index.php" class="waves-effect waves-light green btn-large">Kembali ke dashboard</a>
    </div>
    <table>
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th> </th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($buku as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["judul_buku"] ?></td>
                <td><?= $row["penulis"] ?></td>
                <td><?= $row["penerbit"] ?></td>
                <td><?= $row["tahun_terbit"] ?></td>
                <td>
                    <a href="FormBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="waves-effect waves-light green btn-small">Edit</a>
                    <a href="HapusBuku.php?id_buku=<?= $row["id_buku"]; ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>