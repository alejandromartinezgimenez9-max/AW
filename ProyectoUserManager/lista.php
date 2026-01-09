<?php
include "bdd.php";
$stmt = $pdo->query("SELECT * FROM perfil");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Listado de Usuarios</title>
 <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="page-lista">
<div class="Contenedor1">
 <h1>USUARIOS:</h1>
 <a class="btn" href="registro.php">+ Crear Usuario</a>
 <table>
 <tr>
 <th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th><th>Rol</th><th>Acciones</th>
 </tr>
 <?php foreach ($usuarios as $u): ?>
 <tr>
 <td><?= $u['id'] ?></td>
 <td><?= $u['nombre'] ?></td>
 <td><?= $u['email'] ?></td>
 <td><?= $u['edad'] ?></td>
 <td><?= $u['rol'] ?></td>
 <td>
	 <form class="action-form" action="editar.php" method="get" style="display:inline-block;margin:0;padding:0;">
		 <input type="hidden" name="id" value="<?= $u['id'] ?>">
		 <button class="btn-edit" type="submit">Editar</button>
	 </form>
	 <form class="action-form" action="eliminar.php" method="get" style="display:inline-block;margin:0;padding:0;" onsubmit="return confirm('¿Seguro que quieres eliminar este usuario?');">
		 <input type="hidden" name="id" value="<?= $u['id'] ?>">
		 <button class="btn-delete" type="submit">Eliminar</button>
	 </form>
 </td>
 </tr>
 <?php endforeach; ?>
 </table>
</div>
<div>
	<p><a href="portada.php">Volver a la portada</a></p>
</div>
</body>
</html>