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
        <br/>
        <div class="gridLibros">
            <?php
            include ("Api/conexion.php");
            $query ="SELECT * FROM tbl_libros";    
            $result=mysqli_query($conn, $query) or die (mysqli_error());     
            if (mysqli_num_rows($result) > 0) {        
            while ($row=mysqli_fetch_assoc($result))
            {
            ?>
            <div class="cardLibro">
                <div class="headerLibro">
                    <div>
                        <img src="data:image/png;base64,<?php echo base64_encode($row['foto']); ?>" alt=""
                            class="imgLibro">
                            <a href="pdf.php?modulo=pdf&id=<?php echo $row['id']; ?>">Ver pdf</a>
                    </div>
                    <div>
                        <p class="textoCardLibro">Categoria: <?php echo $row['categoria']; ?></p>
                        <p class="tituloCrdLibro"><?php echo $row['nombre']; ?></p>
                        <div class="gridTextosCardLibro">
                            <p class="textoCardLibro">Autor<br /><span><?php echo $row['autor']; ?></span></p>
                            <p class="textoCardLibro">Año de publicacion<br /><span><?php echo $row['año_publicacion']; ?></span></p>
                            <p class="textoCardLibro">Idioma<br /><span><?php echo $row['idioma']; ?></span></p>
                        </div>
                    </div>
                </div>
                <p class="textoCardLibro"><?php echo $row['descripcion']; ?></p>
            </div>
            <?php
                }}
            ?>
        </div>
    </div>
    <div class='footer'>
        <p>Copyright © 2023 By Library Public | Todos los derechos reservados.</p>
    </div>
    <script src="https://kit.fontawesome.com/0db7247423.js" crossorigin="anonymous"></script>
</body>

</html>
</html>
