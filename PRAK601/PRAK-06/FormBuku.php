<?php
require("model.php");
require("css.php");
$id_buku = !empty($_GET['id_buku']) ? $_GET['id_buku'] : '';
//memeriksa apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {
    if (insertDataBuku($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'Buku.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambahkan');
        document.location.href = 'Buku.php';
        </script>
        ";
    }
}
if (isset($_POST["ubah"])) {
    if (updateDataBuku($_POST) > 0) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'Buku.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal diubah');
        document.location.href = 'Buku.php';
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Buku</title>
</head>

<body>
    <?php if (empty($id_buku)) : ?>
        <section>

            <h4 class="center">Form Buku</h4>

            <form action="" method="post">
                <label class="black-text" for="judul_buku">Judul Buku : </label>
                <input type="text" name="judul_buku" id="judul_buku" required>
                <label class="black-text" for="penulis">Penulis : </label>
                <input type="text" name="penulis" id="penulis" required>
                <label class="black-text" for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required>
                <label class="black-text" for="tahun_terbit">Tahun Terbit : </label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" required>
                <div class="center">
                    <button class="waves-effect waves-light green btn-small" type="submit" name="submit">Submit</button>
                    <a href="Buku.php" class="waves-effect waves-light grey btn-small">Kembali</a>
                </div>
            </form>
        </section>
    <?php endif; ?>
    <?php if (!empty($id_buku)) : ?>
        <?php $buku = getData("buku WHERE id_buku = $id_buku")[0]; ?>
        <section>

            <h4 class="center">Form Buku</h4>

            <form action="" method="post">
                <input type="hidden" name="id_buku" value="<?= $buku["id_buku"] ?>">
                <label class="black-text" for="judul_buku">Judul Buku : </label>
                <input type="text" name="judul_buku" id="judul_buku" required value="<?= $buku["judul_buku"] ?>">
                <label class="black-text" for="penulis">Penulis : </label>
                <input type="text" name="penulis" id="penulis" required value="<?= $buku["penulis"] ?>">
                <label class="black-text" for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required value="<?= $buku["penerbit"] ?>">
                <label class="black-text" for="tahun_terbit">Tahun Terbit : </label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" required value="<?= $buku["tahun_terbit"] ?>">
                <div class="center">
                    <button class="waves-effect waves-light green btn-small" type="submit" name="ubah">Ubah</button>
                    <a href="Buku.php" class="waves-effect waves-light grey btn-small">Kembali</a>
                </div>
            </form>
        </section>
    <?php endif; ?>
</body>
</html>