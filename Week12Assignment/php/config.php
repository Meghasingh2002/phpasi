<?php
$servername = "172312244";
$username = "Megha200556507";
$password = "BHjg0ORNkb";
$dbname = "Megha200556507";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>