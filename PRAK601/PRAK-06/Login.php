<?php
    session_start();
    require("model.php");


    function cekSessionLogin(){
        session_start();

        if (!isset($_SESSION["login"])) {
            header("Location: ErrorPage.php");
            exit;
        }
    }


    if(isset($_SESSION["login"])){
    header("Location: index.php");
    }

    if(isset($_POST["login"])){

        $nomor_member = $_POST["nomor_member"];
        $password = $_POST["password"];

        $result = mysqli_query($dbConn, "SELECT * FROM member WHERE nomor_member = '$nomor_member'");

        
        if(mysqli_num_rows($result) === 1){
            
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                
                $_SESSION["login"] = true;
                
                header("Location: index.php");
                exit;
            }
        }

        $error = true;

    }
?>
