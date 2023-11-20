<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include ("Api/conexion.php");
    $id= mysqli_real_escape_string($conn, $_REQUEST['id'] ?? '');
    $queryProducto = "SELECT * FROM tbl_libros WHERE id='$id';  ";
    $resProducto = mysqli_query($conn, $queryProducto);
    while($rowProducto = mysqli_fetch_assoc($resProducto))
    {
        $pdf=$rowProducto['pdf'];
        header('Content-Type: application/pdf'); // el tipo de contenido
        header('Content-Transfer-Encoding: binary'); 
        header('Content-disposition: attachment; filename="'.basename($spec['source']).'"');
        echo "<iframe src=".$pdf." width='700' height='400' style='border: 1px solid black;'></iframe>";
    }
    ?>
</body>
</html>