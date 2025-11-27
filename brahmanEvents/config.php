<?php
$host = "localhost";
$user = "root"; 
$pass = ""; 
$db = "brahman_events";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>
