<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$codigo = $_POST['codigo'];
$cantidad = $_POST['cantidad'];

    $conexion=mysqli_connect('localhost','root','','inventario');
    $sql = "UPDATE productos SET nombre='$nombre', codigo='$codigo', cantidad='$cantidad' WHERE id='$id'";
    $result = mysqli_query($conexion, $sql);

    if(!$result){
        echo "No se  actualizo!";
    }
    else{
        header("Location: index.php");
    }
   
?>


<!-- $id = (!empty($_POST['id'])) ? $_POST['id'] : "" ; 
POR SI ACASO REMPLAZAR EN LINEA 2
-->