<?php
    session_start();
    echo 'First Name: ' . $_SESSION['fname'] . '<br>';
    echo 'Last Name: ' . $_SESSION['lname'] . '<br>';
    echo 'Email: ' . $_SESSION['email'] . '<br>';

?>
