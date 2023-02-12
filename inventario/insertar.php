<?php
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$cantidad = $_POST['cantidad'];

    $conexion=mysqli_connect('localhost','root','','inventario');
    $sql = "INSERT INTO productos(nombre, codigo, cantidad) VALUES('$nombre', '$codigo', '$cantidad')";
    $result = mysqli_query($conexion, $sql);

    if(!$result){
        echo "No se  inserto!";
    }
    else{
        header("Location:index.php");
    }
?>