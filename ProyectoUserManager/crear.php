<?php
session_start();
include "bdd.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$usuario_id = $_SESSION['usuario_id'] ?? null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
 $nombre = $_POST["nombre"];
 $email = $_POST["email"];
 $edad = $_POST["edad"];
 $rol = $_POST["rol"];
 
    if ($edad < 18) {
        $error = "El usuario debe ser mayor de edad.";
    } else {
        $stmt = $pdo->prepare("INSERT INTO perfil (usuario_id,nombre,email,edad,rol) VALUES (?,?,?,?,?)");
        $stmt->execute([$usuario_id, $nombre, $email, $edad, $rol]);
        header("Location: login.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Usuario</title>
 <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="page-crear">
<div class="Contenedor1">
 <h1>CREAR USUARIO</h1>
 <form method="POST">
 <input type="text" name="nombre" placeholder="Nombre" required>
 <input type="email" name="email" placeholder="Email" required>
 <input type="number" name="edad" placeholder="Edad" required>
 <select name="rol">
 <option value="user">Usuario</option>
 <option value="admin">Administrador</option>
 </select>
 <button class="btn" type="submit">Guardar</button>
 <?php if (!empty($error)): ?>
  <p style="color:red;"><?php echo $error; ?></p>
 <?php endif; ?>
 </form>
</div>
<script src="js/validacion.js"></script>
</body>
</html>