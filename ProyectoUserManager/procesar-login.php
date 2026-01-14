<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="page-procesar-login">
<?php
session_start();
include "bdd.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$usuario = $_POST['usuario'];
$password = $_POST['password'];
// Consulta segura
$stmt = $pdo->prepare("SELECT u.id, u.contraseña, p.rol FROM usuarios u INNER JOIN perfil p ON u.id = p.usuario_id WHERE u.usuario = ?");
$stmt->execute([$usuario]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($user) {
    $id = $user['id'];
    $hash = $user['contraseña'];
 if (password_verify($password, $hash)) {
  $_SESSION['usuario'] = $usuario;
  $_SESSION['rol'] = $user['rol'];
  header("Location: portada.php");
  exit;
 } else {
 echo "<h1>Contraseña incorrecta ❌</h1>";
 echo "<p><a href='login.php' style='color: blue;'>Volver a intentar</a></p>";
 }
} else {
 echo "<h1>Usuario no encontrado ❌</h1>";
 echo "<p><a href='registro.php' style='color: blue;'>Registrarse</a></p>";
}
?>
</body>
</html>