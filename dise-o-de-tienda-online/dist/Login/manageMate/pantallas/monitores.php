<?php 
    include("../funciones/funciones.php");
    include("../database/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/manageMate/utils/icons/icono.png">
        <link rel="stylesheet" href="/manageMate/utils/css/generico.css">
        <link rel="stylesheet" href="/manageMate/utils/css/tabla.css">
        <title>ManageMate</title>
    </head>

    <body>
        <?php 
            include("../partials/header.php"); 
            include("../partials/menu_vendedor.php");
        ?>
        <!--evaluamos si proc_registro envio un mensaje-->
        <?php if(isset($_REQUEST['mens'])):?>
            <p><?=$_REQUEST['mens']?></p>
        <?php endif;?>
        <table class="table">
            <thead>
                <tr>
                    <th> Id </th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($conex->query("SELECT * FROM productos WHERE categoria = 'Monitor'") as $producto){?>
                    <tr class="row">
                        <td><?=$producto["id"]?></td>
                        <td><?=$producto["nombre"]?></td>
                        <td id="des"><?=$producto["descripcion"]?></td>
                        <td><?=$producto["marca"]?></td>
                        <td><?=$producto["precio"]?></td>
                        <td><img height = "200px" src="data:img/jpg;base64, <?=base64_encode($producto["imagen"]); ?>"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>

    <footer class="pie_pagina">
        <p>ManageMate todos los derechos reservados &copy</p>
    </footer>
</html>
