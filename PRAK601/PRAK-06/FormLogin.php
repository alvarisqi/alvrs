<?php
    require("Login.php");
    require("css.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Login</title>
    </head>

    <body>
        <h2>Login</h2>

        <?php if(isset($error)):?>
            <h5 style="color: red; font-style:italic; text-align:center;">Nomor Member/Password salah</h5>
        <?php endif ?>
        <section class="container blue-text">
        <form action="" method="POST">
            <label class="black-text" for="nomor_member">Nomor Member : </label>
            <input type="text" name="nomor_member" id="nomor_member" required>
            <label class="black-text" for="password">Password : </label>
            <input type="password" name="password" id="password" required>
            <div class="center">
            <button class="waves-effect waves-light blue btn" type="submit" name="login">Login</button>
            <a href="index.php" class="waves-effect waves-light green btn">Kembali</a>
            </div>
        </form>
        </section>
    </body>
</html>