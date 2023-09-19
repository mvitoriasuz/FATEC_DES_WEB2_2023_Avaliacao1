<?php
session_start();

if(isset($_SESSION["autenticado"])) {
    session_unset();
    session_destroy();
}

header("Location: home.php");
exit();
?>
