<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Library Public</title>
</head>

<body>
    <div class="hora">
        <?php
        $fecha_actual = date("d-m-Y h:i:s");
        echo "La fecha y hora actual es: $fecha_actual";
        ?>
    </div>
    <div class="header">
        <img src="Imagenes/Logo.png" class="logo" />
        <nav>
            <ul>
                <li><a href="index.php"><i class="fa-solid fa-house"></i> Inicio</a></li>
                <li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i> Inicio sesion</a></li>
            </ul>
        </nav>
    </div>
    <div class="contenedor-general">
        <p class="titulo-principal"><i class="fa-solid fa-book-open"></i> Libros Publicados</p>
    </div>
    <div class='footer'>
        <p>Copyright © 2023 By Library Public | Todos los derechos reservados.</p>
    </div>
    <script src="https://kit.fontawesome.com/0db7247423.js" crossorigin="anonymous"></script>
</body>

</html>