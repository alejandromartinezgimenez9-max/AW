<?php
$host = "localhost";
$user = "alejandro";
$pass = "alejandro";
$db = "proyecto_login";

$conn = new mysqli($host, $user, $pass, $db);  

if ($conn->connect_error) {
 die("Error de conexión: " . $conn->connect_error);
}
?>