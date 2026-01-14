<?php
session_start();
if (!isset($_SESSION['usuario'])) {
 header("Location: login.php");
 exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Bienvenida</title>
   <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="page-portada">
 <h1 class="Contenedor1"> Bienvenido/a a nuestra página web <?php echo $_SESSION['usuario']; ?>!! 😎🎉
 <p>Has iniciado sesión correctamente.</p>
 <p>Si quieres cerrar sesión, haz clic <a href="logout.php" style="color: blue;">aquí</a>.</p>
 <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
    <p>Como administrador, puedes acceder a la <a href="index.php" style="color: blue;">página de administración</a>.</p>
 <?php endif; ?>
 </h1>
</body>
</html>
