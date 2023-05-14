<?php 
    if (!isset($_SESSION['kasir'])) {
        echo "<script>location='login.php';</script>";
        exit();
    }
?>