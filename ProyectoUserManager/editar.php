<?php
include "bdd.php";
$id = $_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM perfil WHERE id=?");
$stmt->execute([$id]);
$usuario = $stmt->fetch();
if ($_POST) {
 $nombre = $_POST["nombre"];
 $email = $_POST["email"];
 $edad = $_POST["edad"];
 $rol = $_POST["rol"];
 $update = $pdo->prepare("UPDATE perfil SET nombre=?, email=?, edad=?, rol=? WHERE
id=?");
 $update->execute([$nombre, $email, $edad, $rol, $id]);
 header("Location: lista.php");
 exit;
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Editar Usuario</title>
 <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="page-editar">
<div class="Contenedor1">
 <h1>EDITAR USUARIO:</h1>
 <form method="POST">
 <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required>
 <input type="email" name="email" value="<?= $usuario['email'] ?>" required>
 <input type="number" name="edad" value="<?= $usuario['edad'] ?>" required>
 <select name="rol">
 <option value="user" <?= $usuario['rol']=='user'?'selected':'' ?>>Usuario</option>
 <option value="admin" <?= $usuario['rol']=='admin'?'selected':'' ?>>Administrador</option>
 </select>
 <button class="btn" type="submit">Actualizar</button>
 <!-- Enlace de eliminación: usar la variable correcta $usuario['id'] y confirmar acción -->
 <a class="btn-delete" href="eliminar.php?id=<?= $usuario['id'] ?>" onclick="return confirm('¿Seguro que quieres eliminar este usuario? Esta acción es definitiva.');">Eliminar este usuario.</a>
 </form>
</div>
<script src="js/validacion.js"></script>
</body>
</html>