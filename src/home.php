<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location: Login.php');
    exit();
}
include("Api/conexion.php");
$id = $_SESSION['id'];
$sql = "SELECT * FROM tbl_usuarios WHERE id = '$id'";
$resultado = $conn->query($sql);
$row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Library Public | Home </title>
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
                <li><a href="Api/cerrarsesion.php"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Session</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="contenedor-general1">

        <div class="grid">
            <div class="columna1">
                <div class="user">
                    <p>Bienvenido</p>
                    <p><?php echo $row['nombre']; ?></p>
                </div>
                <nav class="menu-login">
                    <ul>
                        <li class="active"><a href="home.php">Mis Libros</a></li>
                        <li><a href="perfil.php">Perfil</a></li>
                         <li><a href="nuevoLibro.php">Insertar nuevo libro</a></li>
                    </ul>
                </nav>
            </div>
            <div class="columna2">
                <br />
                <p class="titulo-principal">Mis Libros</p>
                <br />
            </div>
        </div>

    </div>
    <div class='footer'>
        <p>Copyright © 2023 By Library Public | Todos los derechos reservados.</p>
    </div>
    <script src="https://kit.fontawesome.com/0db7247423.js" crossorigin="anonymous"></script>
</body>

</html>
