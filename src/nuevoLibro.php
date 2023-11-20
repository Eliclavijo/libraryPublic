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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                <br />
                <nav class="menu-login">
                    <ul>
                        <li><a href="home.php">Mis Libros</a></li>
                        <li><a href="perfil.php">Perfil</a></li>
                        <li class="active"><a href="nuevoLibro.php">Insertar nuevo libro</a></li>
                    </ul>
                </nav>
            </div>
            <div class="columna2">
                <br />
                <p class="titulo-principal">Nuevo Libro</p>
                <br />
                <form action="Api/InsertarNuevoLibro.php" 
                      method="post" 
                      enctype="multipart/form-data" 
                      class="form-nuevo-libro">    
                    <div>
                        <p class="titulo-form">Nombre completo</p>
                        <input name="nombre" type="text"  class="form-control">
                    </div>
                    <div>
                        <p class="titulo-form">Foto</p>
                        <input name="foto" type="file"  id="foto" class="form-control">
                    </div>
                    <div>
                        <p class="titulo-form">Descripcion</p>
                        <input type="text" name="descripcion" class="form-control">
                    </div>
                    <div>
                        <p class="titulo-form">Pdf libro</p>
                        <input type="file" name="pdf"  id="pdf" class="form-control">
                    </div>
                    <div>
                        <p class="titulo-form">Autor</p>
                        <input type="text" name="autor" class="form-control">
                    </div>
                    <div>
                        <p class="titulo-form">Año de publicacion</p>
                        <input type="number" name="año_publicacion" class="form-control">
                    </div>
                    <div>
                        <p class="titulo-form">Categoria</p>
                        <input type="text" name="categoria" class="form-control">
                    </div>
                    <div>
                        <p class="titulo-form">Idioma</p>
                        <input type="text" name="idioma" class="form-control">
                    </div>
                    <input type="hidden" name="id_usuario" value="<?php echo $row['id']; ?>" class="form-control" />
                    <button class="btn-form-new-book" type="submit" name="btn-form-new-book">Enivar</button>
                </form>
            </div>
        </div>

    </div>
    <div class='footer'>
        <p>Copyright © 2023 By Library Public | Todos los derechos reservados.</p>
    </div>
    <script src="https://kit.fontawesome.com/0db7247423.js" crossorigin="anonymous"></script>
</body>

</html>