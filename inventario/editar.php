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
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$codigo = $_GET['codigo'];
$cantidad = $_GET['cantidad'];

?>

    <form action="sp_editar.php" method="post">
        <div>
            <div><label>ID</label></div>
            <div><input type="text" readonly="readonly" name="id" value="<?=$id?>"></div> 
        </div>
        <div>
            <div><label>Nombre</label></div>
            <div><input type="text" name="nombre" id="" value="<?=$nombre?>"></div>
        </div>
        <div>
            <div><label>Codigo de Barra</label></div>
            <div><input type="text" name="codigo" id="" value="<?=$codigo?>"></div>
        </div>
        <div>
            <div><label>Cantidad</label></div>
            <div><input type="text" name="cantidad" id="" value="<?=$cantidad?>"></div>
        </div>
        <br>
        <div>
            <input type="submit" value="Actualizar">
            <a href="index.php">Cancelar</a>
        </div>
    </form>
    <?php  $test;
    echo var_dump($id);?>
</body>
</html>