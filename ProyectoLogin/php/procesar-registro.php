<?php
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$file = fopen("lista-usuarios.txt", "a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . PHP_EOL);
fclose($file);

echo "<h1>¡Tu usuario se ha registrado correctamente!</h1>";
echo "<p>Ya puedes <a href='login.php'>inicar sesión.</a></p>";

?>