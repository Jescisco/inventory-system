<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$id = (!empty($_GET['id']))?$_GET['id']:"";
$nombre = (!empty($_GET['nombre']))?$_GET['nombre']:"";
$codigo = (!empty($_GET['codigo']))?$_GET['codigo']:"";
?>

    <form action="sp_venta.php" method="post">
        <input type="hidden" name="cantidad" value="<?=$cantidad?>">
        <div>
            <div><label>ID</label></div>
            <div><input type="text" readonly="readonly" name="id" value="<?=$id?>"></div> 
        </div>
        <div>
            <div><label>Nombre</label></div>
            <div><input type="text" readonly="readonly" name="nombre" id="" value="<?=$nombre?>"></div>
        </div>
        <div>
            <div><label>Codigo de Barra</label></div>
            <div><input type="text" readonly="readonly" name="codigo" id="" value="<?=$codigo?>"></div>
        </div>
        <div>
            <div><label>Cantidad a vender</label></div>
            <div><input type="number" name="venta" id=""></div>
        </div>
        <br>
        <div>
            <input type="submit" value="Vender">
            <a href="index.php">Cancelar</a>
        </div>
    </form>
    <?php ?>
</body>
</html>