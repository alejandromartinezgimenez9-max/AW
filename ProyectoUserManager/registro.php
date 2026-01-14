<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="page-registro">
<div class="Contenedor1">
 <h1>REGÍSTRATE AQUÍ:</h1>
 <form action="procesar-registro.php" method="post">
 <label>Nombre de usuario:</label>
 <input type="text" name="usuario" required><br><br>
 <label>Contraseña:</label>
 <input type="password" name="password" required><br><br>
 <button type="submit">Registrarse</button>
 </form>
 <p>¿Ya estás registrado? Inicia sesión <a href="login.php" style="color: blue;">aquí</a>.</p>
 </div>
</body>
</html>