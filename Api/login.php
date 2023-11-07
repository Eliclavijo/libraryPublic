<?php
    include ("conexion.php");
    session_start();
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_usuarios WHERE correo = '$correo' AND password = '$password'";
    $resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['nombre'] = $row['nombre'];
    $_SESSION['direccion'] = $row['direccion'];
    $_SESSION['ciudad'] = $row['ciudad'];
    $_SESSION['telefono'] = $row['nombre'];
    $_SESSION['correo'] = $row['correo'];
    header('Location: ../home.php');
} else {
    echo "Correo electrónico o contraseña incorrectos";
}
?>