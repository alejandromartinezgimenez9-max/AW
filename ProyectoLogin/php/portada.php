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
 <style>


    :root {
        --color1: purple;
        --color2: blue;
        --color3: aqua;
        --color4: #FAFF00
    }

    body {
        background: linear-gradient(90deg, var(--color3), var(--color2));
        font-family: Cardo;
        padding: 75px;
    }

    label {
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
    }

    .Contenedor1 {
        color: var(--color4);
        text-align: center;
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 8px;
        max-width: 400px;
        margin: auto;
    }

    .Contenedor1 h1 {
        margin-bottom: 20px;
        color: var(--color4);        
    }
    
 </style>
</head>
<body>
 <h1 class="Contenedor1"> Bienvenido/a a nuestra página web <?php echo $_SESSION['usuario']; ?>!! 😎🎉
 <p>Has iniciado sesión correctamente.</p>
 <p>Si quieres cerrar sesión, haz clic <a href="logout.php" style="color: aqua;">aquí</a>.</p>
 </h1>
</body>
</html>
