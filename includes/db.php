<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dobu_martial_arts";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
