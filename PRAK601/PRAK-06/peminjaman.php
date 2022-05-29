<?php
require("model.php");
require("css.php");

$peminjaman = getData("peminjaman");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Peminjaman</title>
</head>

<body>
    <h1>Daftar Peminjaman</h1>
    <div class="buttonadd">
        <a href="FormPeminjaman.php" class="waves-effect waves-light blue btn-large">Tambah Data Peminjaman</a>
        <a href="index.php" class="waves-effect waves-light green btn-large">Kembali ke dashboard</a>
    </div>
    <table>
        <tr>
            <th>No.</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th> </th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($peminjaman as $row) : 
            $tgl_pinjam = date_create($row["tgl_pinjam"]);
            $tgl_kembali = date_create($row["tgl_kembali"]);?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= date_format($tgl_pinjam, 'd-m-Y') ?></td>
                <td><?= date_format($tgl_kembali, 'd-m-Y') ?></td>
                <td>
                    <a href="FormPeminjaman.php?id_peminjaman=<?= $row["id_peminjaman"]; ?>" class="waves-effect waves-light green btn-small">Edit</a>
                    <a href="HapusPeminjaman.php?id_peminjaman=<?= $row["id_peminjaman"]; ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>