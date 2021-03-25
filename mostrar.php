<?php
//Incluye la clase computador y CrudComputador
require_once('crud_computador.php');
require_once('computador.php');
$crud=new CrudComputador();
$computador= new Computador();
//Obtiene todos los computadores con el método mostrar de la clase crud
$listaComputador=$crud->mostrar();
?>

<!DOCTYPE html>

<html lang="es">
 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CRUD">
    <meta name="keywords" content="HTML,CSS3,JavaScript">
    <title>CRUD - Administrar Computador</title>
    <link rel="stylesheet" href="css/estilotabla.css">
    <link rel="shortcut icon" href="imagen/fav.ico"/>
    
</head>

<body>
    <header>
        <nav>
        <ul id="lista">
            <li><a title="Volver al Inicio" href="index.php">INICIO</a></li>
            <li><a title="Explora Servidores" href="enlaces/servidores.php">Servidores</a></li>
            <li><a title="Mira Productos" href="enlaces/productos.php">Productos</a></li>
            <li><a title="Disfruta de las Promos" href="enlaces/feed.php">Feedback</a></li>
            <li><a class="sel" title="Datos Guardados" href="mostrar.php">Ver Datos</a></li>
        </ul>
        </nav>
    </header>
    <center><img class="splash" src="imagen/splash.png"></center>
    <div><p class="cacume">Inventario de Equipos<p></div>
    
            <center><table class="tmostrar">
                    <head>
                    <td class="cabezamostrar"><center><font face="Arial" size="+2">Tipo</font></center></td>
                    <td class="cabezamostrar"><center><font face="Arial" size="+2">Marca</font></center></td>
                    <td class="cabezamostrar"><center><font face="Arial" size="+2">Procesador</font></center></td>
                    <td class="cabezamostrar"><center><font face="Arial" size="+2">Memoria RAM</font></center></td>
                    <td class="cabezamostrar"><center><font face="Arial" size="+2">Disco Duro</font></center></td>
                    <td class="cabezamostrar"><center><font face="Arial" size="+2">Fecha de Fabricación</font></center></td>
                    <td colspan="2" class="cabezamostrar"><center><font face="Arial" size="+2">Herramientas de Edición</font></center></td>
                    </head>
                    
                        <?php foreach ($listaComputador as $computador){?>
                    <tr>
                        <td><?php echo $computador->getTipo() ?></td>
                        <td><?php echo $computador->getMarca() ?></td>
                        <td><?php echo $computador->getProcesador() ?></td>
                        <td><?php echo $computador->getMemoria() ?></td>
                        <td><?php echo $computador->getDisco() ?></td>
                        <td><?php echo $computador->getAnio_fabricacion() ?></td>
                        <td><a href="actualizar.php?id=<?php echo $computador->getId()?>&accion=a">Actualizar</a></td>
                        <td><a href="administrar_computador.php?id=<?php echo $computador->getId()?>&accion=e">Eliminar</a></td>
                    </tr>
                        <?php }?>
                </table></center><br>
                <center><button onclick="location.href='index.php'">Volver</button></center><br><br>
       
    </body>
 <center><footer><font size="3" face="Cooper Black">Administrar Computador 2019</font></center><br><br>
    <center>&copy; EDABALUSoft Soluciones Integrales 2019 por Edinson David Barrera Lugo</center>
    </footer>
    </html>
        