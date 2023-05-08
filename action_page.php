<?php
    session_start();
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['email'] = $_POST['email'];
    
    header('Location: show_data.php');
    exit;
?>    