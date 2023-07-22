<?php 
    session_start();
    $_SESSION['auth'] = null;
    $addr = 'index.php';
    header("Location: $addr");  
?>