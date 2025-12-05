<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Iniciar sesión</title>
 <style>

    .h1 {
        color: var(--color4);

    }

    :root {
        --color1: purple;
        --color2: blue;
        --color3: aqua;
        --color4: #FAFF00;
    }

    button {
        text-align: center;
        justify-content: center;
        display: block;
        margin: 0 auto;
        
    }

    button:hover {
        transform: translateX(1px);
        background-color: var(--color3);
        margin: auto;
        transition: background-color 0.4s;
    }

    body {
        background: linear-gradient(90deg, var(--color2), var(--color1));
        font-family: Cardo;
        padding: 75px;
    }

    label {
        display: inline-block;
        width: 150px;
        margin-bottom: 10px;
    }

    .Contenedor1 {
        color: #ffffffff;
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        border-radius: 8px;
        max-width: 400px;
        margin: auto;
    }

    .Contenedor1 h1 {
        text-align: center;
        margin-bottom: 20px;
        color: var(--color4);
    }
    
 </style>
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