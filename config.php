<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'stellar_resume';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die('DB connect error: ' . mysqli_connect_error());
}
?>