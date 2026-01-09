<?php
session_start();
include "bdd.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT 1 FROM usuarios WHERE usuario = ? LIMIT 1");
    $stmt->execute([$usuario]);
    if ($stmt->fetch()) {
        echo "<h1>El nombre de usuario ya existe.</h1>";
        echo "<p><a href='registro.php'>Volver al registro</a></p>";
        exit;
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);

    try {
    $stmt = $pdo->prepare("INSERT INTO usuarios (usuario, contraseña) VALUES (?, ?)");


    if ($stmt->execute([$usuario, $hash])) {
    $_SESSION['usuario_id'] = $pdo->lastInsertId();
    echo "<h1>Usuario registrado correctamente</h1>";
    echo "<p><a href='crear.php'>Crear usuario</a></p>";
    } else {
    echo "<h1>Error al registrar el usuario</h1>";
    echo "<p><a href='registro.php'>Volver al registro</a></p>";
    }
    } catch (PDOException $e) {
    echo "<h1>Error en la base de datos: " . $e->getMessage() . "</h1>";
}
?>