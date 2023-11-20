<?php
include ("conexion.php");

$permitidos_imagen = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$permitidos_pdf = array("application/pdf");
$limite_kb = 60000;

if ((in_array($_FILES['foto']['type'], $permitidos_imagen) && $_FILES['foto']['size'] <= $limite_kb * 1024) && (in_array($_FILES['pdf']['type'], $permitidos_pdf) 
        && $_FILES['pdf']['size'] <= $limite_kb * 1024)) {

    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $autor = $_POST["autor"];
    $año_publicacion = $_POST["año_publicacion"];
    $categoria = $_POST["categoria"];
    $idioma = $_POST["idioma"];
    $id_usuario = $_POST["id_usuario"];


    $imagen_temporal = $_FILES['foto']['tmp_name'];
    $pdf_temporal = $_FILES['pdf']['tmp_name'];
    $tipo_imagen = $_FILES['foto']['type'];
    $tipo_pdf = $_FILES['pdf']['type'];
    $data_imagen = file_get_contents($imagen_temporal);
    $data_imagen = mysqli_real_escape_string($conn, $data_imagen);
    $data_pdf = file_get_contents($pdf_temporal);
    $data_pdf = mysqli_real_escape_string($conn, $data_pdf);
  
    $resultado = "INSERT INTO tbl_libros (nombre, foto, descripcion, pdf,autor,año_publicacion,categoria,
    idioma,id_usuario) VALUES ('$nombre', '$data_imagen','$descripcion',' $data_pdf','$autor','$año_publicacion','$categoria','$idioma','$id_usuario')";
    mysqli_query($conn, $resultado);
  
    if ($resultado) {
        header('location:../home.php');
    } else {
      echo "Error al copiar el archivo";
    }
  } else {
    echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb kbytes";
  }


?>