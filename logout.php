<?php 
    require_once 'header.php';
    //session_unset();
    session_destroy();
    echo "<script> alert('登出成功'); window.location.replace('index.php');</script>";
?>