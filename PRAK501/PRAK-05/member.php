<?php
require("model.php");
require("css.php");
$member = getData("member");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Member</title>
</head>

<body>
    <h1>Daftar Member</h1>
    <div class="buttonadd">
        <a href="FormMember.php" class="waves-effect waves-light blue btn-large">Tambah Data Member</a>
        <a href="index.php" class="waves-effect waves-light green btn-large">Kembali ke dashboard</a>
    </div>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>Alamat</th>
            <th>Tanggal Mendaftar</th>
            <th>Tanggal Terakhir Bayar</th>
            <th> </th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($member as $row) : 
            $tgl_mendaftar = date_create($row["tgl_mendaftar"]);
            $tgl_terakhir_bayar = date_create($row["tgl_terakhir_bayar"]);?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_member"] ?></td>
                <td><?= $row["nomor_member"] ?></td>
                <td><?= $row["alamat"] ?></td>
                <td><?= date_format($tgl_mendaftar, 'd-m-Y H:i:s') ?></td>
                <td><?= date_format($tgl_terakhir_bayar, 'd-m-Y') ?></td>
                <td>
                    <a href="FormMember.php?id_member=<?= $row["id_member"]; ?>" class="waves-effect waves-light green btn-small">Edit</a>
                    <a href="HapusMember.php?id_member=<?= $row["id_member"]; ?>" class="waves-effect waves-light red btn-small" onclick="return confirm('Apakah yakin data akan dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>

</html>