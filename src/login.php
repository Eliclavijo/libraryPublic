<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Library Public | inicio sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="hora">
        <?php
        $fecha_actual = date("d-m-Y h:i:s");
        echo "La fecha y hora actual es: $fecha_actual";
        ?>
    </div>
    <div class="header">
        <nav>
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i> Inicio</a></li>
            </ul>
        </nav>
    </div>
    <div class="contenedor-general">

        <form method="POST" action="Api/login.php" class="formulario">
        <img src="Imagenes/Logo.png" class="logo1" />
            <p class="titulo-principal">Inicio de sesion</p>
            <input type="email" class='form-control' name="correo" placeHolder="Correo electronico: aaa@aaa.com" />
            <input type="password" class='form-control' name="password" placeHolder="Contraseña"/>
            <button class='btn-inicio-sesion' name="btningresar" type="submit">Entrar</button>
        </form>

    </div>
    <div class='footer'>
        <p>Copyright © 2023 By Library Public | Todos los derechos reservados.</p>
    </div>
    <script src="https://kit.fontawesome.com/0db7247423.js" crossorigin="anonymous"></script>
</body>

</html>