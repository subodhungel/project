<?php
// session_start();
    // $name = $_SESSION['name'];
    // $role = $_SESSION['role'];
    $user = 'root';
    $password = '';
    $db = 'food';
    $host = 'localhost';
    $port = 3306;

    $con = new mysqli($host, $user, $password, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
