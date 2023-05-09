<?php 
    if (!isset($_SESSION['login'])) {
        echo "<script>location='home.php';</script>";
        exit();
    }
?>