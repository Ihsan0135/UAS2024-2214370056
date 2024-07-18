<?php
session_start();
session_unset();
session_destroy();
$_SESSION['login'] = false;

// Redirect atau tindakan lain setelah logout
header('Location: ../index.php');
exit();