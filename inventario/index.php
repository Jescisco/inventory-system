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
    <div class="title_menu">
        <h1>Nona Elena</h1>
    </div>
    <br>
    <div>
        <h2>Registrar Inventario</h2>
    </div>
    <form action="insertar.php" method="post">
        <div>
            <div><label>ID</label></div>
            <div><input type="text" name="id" readonly="readonly"></div>
        </div>
        <div>
            <div><label>Nombre</label></div>
            <div><input type="text" name="nombre" id=""></div>
        </div>
        <div>
            <div><label>Codigo de Barra</label></div>
            <div><input type="text" name="codigo" id=""></div>
        </div>
        <div>
            <div><label>Cantidad</label></div>
            <div><input type="text" name="cantidad" id=""></div>
        </div>
        <br>
        <div>
            <input type="submit" value="Enviar Datos">
        </div>
        <br>
        <br>
    </form>
    
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
                $sql = "SELECT * FROM productos order by id";
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
</body>
</html>