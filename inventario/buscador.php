<?php

    $conexion=mysqli_connect('localhost','root','','inventario');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nona Elena</title>
</head>
<body>  
        <div>
            <form action="buscador.php" method="post">    
                <input type="text" name="buscar" id="">
                <input type="submit" value="Buscar">
            </form>
        </div>
    
        <br>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</th>
                    <td>Nombre del producto</td>
                    <td>Codigo de Barra</td>
                    <td>Cantidad Disponible</td>
                    <td>Opciones</td>
                </tr>

                <?php
                $buscar = $_POST['buscar'];
                $sql = "SELECT * FROM productos where codigo like '$buscar' '%' order by id desc";
                $result = mysqli_query($conexion, $sql);
                while ($mostrar = mysqli_fetch_row($result)){
                 ?>
                <tr>
                    <td><?php echo $mostrar['0']?></td>
                    <td><?php echo $mostrar['1']?></td>
                    <td><?php echo $mostrar['2']?></td>
                    <td><?php echo $mostrar['3']?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar['0']?> &
                        nombre=<?php echo $mostrar['1']?> &
                        codigo=<?php echo $mostrar['2']?> &
                        cantidad=<?php echo $mostrar['3']?>
                        ">Editar</a>
                        <a href="sp_eliminar.php?
                        id=<?php echo $mostrar['0']?>
                        ">Eliminar</a>
                        <a href="ventas.php?
                        id=<?php echo $mostrar['0']?> &
                        nombre=<?php echo $mostrar['1']?> &
                        codigo=<?php echo $mostrar['2']?>
                        ">Vender</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </thead>
        </table>    
    </div>
    <a href="index.php">Volver al menu</a>
</body>
</html>