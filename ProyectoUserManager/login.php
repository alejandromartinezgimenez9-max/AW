<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Iniciar sesión</title>
</head>
<body>
<div class="Contenedor1">
 <h1>INICIA SESIÓN AQUÍ:</h1>
 <form action="procesar-login.php" method="post">
 <label>Nombre de usuario:</label>
 <input type="text" name="usuario" required><br><br>
 <label>Contraseña:</label>
 <input type="password" name="password" required><br><br>
 <button type="submit">Iniciar sesión</button>
 </form>
 <p>¿No te has registrado aún? Regístrate <a href="registro.php" style="color: aqua;">aquí.</a></p>
</div>
</body>
</html>