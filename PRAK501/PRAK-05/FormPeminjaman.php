<?php
require("model.php");
require("css.php");
$id_peminjaman = !empty($_GET['id_peminjaman']) ? $_GET['id_peminjaman'] : '';
//memeriksa apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (insertDataPeminjaman($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'Peminjaman.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'Peminjaman.php';
        </script>
        ";
    }
}
if (isset($_POST["ubah"])) {
    if (updateDataPeminjaman($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'Peminjaman.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah');
        document.location.href = 'Peminjaman.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Peminjaman</title>
</head>

<body>
    <?php if (empty($id_peminjaman)) : ?>
        <section>

            <h4 class="center">Form Peminjaman</h4>

            <form action="" method="post">
                <label class="black-text" for="tgl_pinjam">Tanggal Pinjam : </label>
                <input type="date" name="tgl_pinjam" id="tgl_pinjam" required>
                <label class="black-text" for="tgl_kembali">Tanggal Kembali : </label>
                <input type="date" name="tgl_kembali" id="tgl_kembali" required>
                <div class="center">
                    <button class="waves-effect waves-light green btn-small" type="submit" name="submit">Submit</button>
                    <a href="Peminjaman.php" class="waves-effect waves-light grey btn-small">Kembali</a>
                </div>
            </form>
        </section>
    <?php endif; ?>
    <?php if (!empty($id_peminjaman)) : ?>
        <?php $peminjaman = getData("peminjaman WHERE id_peminjaman = $id_peminjaman")[0]; ?>
        <section>

            <h4 class="center">Form Peminjaman</h4>

            <form action="" method="post">
                <input type="hidden" name="id_peminjaman" value="<?= $peminjaman["id_peminjaman"] ?>">
                <label class="black-text" for="tgl_pinjam">Tanggal Pinjam : </label>
                <input type="date" name="tgl_pinjam" id="tgl_pinjam" required value="<?= $peminjaman["tgl_pinjam"] ?>">
                <label class="black-text" for="tgl_kembali">Tanggal Kembali : </label>
                <input type="date" name="tgl_kembali" id="tgl_kembali" required value="<?= $peminjaman["tgl_kembali"] ?>">
                <div class="center">
                    <button class="waves-effect waves-light green btn-small" type="submit" name="ubah">Ubah</button>
                    <a href="Peminjaman.php" class="waves-effect waves-light grey btn-small">Kembali</a>
                </div>
            </form>
        </section>
    <?php endif; ?>
</body>
</html>