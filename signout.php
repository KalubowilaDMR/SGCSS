<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['message']);
// session_destroy();
header('Location: signin.php');
?>