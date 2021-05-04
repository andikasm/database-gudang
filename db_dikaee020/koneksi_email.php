<?php
if (empty($_SESSION["email"])){
    $_SESSION["alert"] = "Antum harus melakukan login dulu baru bisa akses su !";
    header("location:login.php");
}

?>