<?php
    session_start();
    $_SESSION['Usuario']="";
    session_destroy();
    echo "<script> alert('Session Cerrada'); window.location='../index.php'</script>";
?>