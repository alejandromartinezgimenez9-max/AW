<?php
    include "conexion.php";

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];


    // Encriptar contraseña
    $hash = password_hash($password, PASSWORD_DEFAULT);

    // Preparar consulta segura
    $stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $hash);


    if ($stmt->execute()) {
    echo "<h1>Usuario registrado correctamente</h1>";
    echo "<p><a href='login.php'>Iniciar sesión</a></p>";
    }
    $stmt->close();
    $conn->close();
?>