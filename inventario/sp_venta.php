<?php
$id = $_POST['id'];
$venta = (!empty($_POST['venta']))?$_POST['venta']:"";

try{
    $conexion = new PDO("mysql:host=localhost;dbname=inventario","root","");
    
    
        $sqlQ=$conexion->prepare("SELECT cantidad FROM productos WHERE id=:id");
        $sqlQ->bindParam(':id',$id);
        $sqlQ->execute();
        $result = $sqlQ->fetch(PDO::FETCH_ASSOC);
        $cantidad=$result['cantidad'];

        $query =$conexion->prepare("UPDATE productos SET cantidad=:cantidad WHERE id=:id");
    $query->bindParam(':id',$id);
    $cantidad-=$venta;
    $query->bindParam(':cantidad',$cantidad);
    $query->execute();

    header("Location: index.php");
    }catch(PDOException $e){
        echo $e->getMessage()."<br>";
        die();
    }
