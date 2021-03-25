<?php
//Incluye la clase Computador y CrudComputador

require_once('crud_computador.php');
require_once('computador.php');
$crud= new CrudComputador();
$computador=new Computador();
//Busca el computador utilizando el id, que es enviado por GET desde la vista mostrar.php
$computador=$crud->obtenerComputador($_GET['id']);
?>

<!DOCTYPE html>

<html lang="es">
 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CRUD">
    <meta name="keywords" content="HTML,CSS3,JavaScript">
    <title>CRUD - Administrar Computador</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imagen/fav.ico"/>
</head>

<body>
    <header>
        <nav>
        <ul id="lista">
            <li><a title="Volver al Inicio" href="index.php">INICIO</a></li>
            <li><a title="Explora Servidores" href="enlaces/servidores.php">Servidores</a></li>
            <li><a title="Mira Productos" href="enlaces/productos.php">Productos</a></li>
            <li><a title="Disfruta de las Promos" href="enlaces/promos.php">Promos</a></li>
            <li><a title="Visita el Feedback" href="enlaces/feed.php">Feedback</a></li>
        </ul>
        </nav>
    </header>
    <center><img class="splash" src="imagen/splash.png"></center>
    
    <header><center><font size="5" face="Cooper Black">
            Bienvenido Administrar Computador</font></center><br>
    </header>
    <form action='administrar_computador.php' method='post'>
    <center><table>
            <tr>
                <input type='hidden' name='id' value='<?php echo $computador->getId()?>'>
                <td><font face="Emmett" size="+2">Tipo:</font></td>
                <td><select name="tipo" value='<?php echo $computador->getTipo()?>' style="width: 170px">
                        <option selected>-----Elige la opcion-----</option> 
                        <option value="Escritorio">PC Escritorio</option>
                        <option value="Portatil">PC Portatil</option>
            </tr>
            
            <tr>                
                <td><font face="Emmett" size="+2">Marca:</font></td>
                        <td><select name="marca" value='<?php echo $computador->getMarca() ?>' style="width: 170px">   
                        <option selected>-----Elige la opcion-----</option>
                        <option value='Acer'>ACER</option>
                        <option value='Sony VAIO'>Sony VAIO</option>
                        <option value='HP'>HP</option>
                        <option value='Lenovo'>LENOVO</option>
                        <option value='Asus'>ASUS</option>
                        <option value='Dell'>DELL</option>
                        <option value='Toshiba'>TOSHIBA</option>
                        <option value='Apple'>Apple</option>
                        <option value='Compaq'>Compaq</option>               
            </tr>
            <tr>
                <td><font face="Emmett" size="+2">Procesador:</font></td>
                <td><input type='text' name='procesador' value='<?php echo $computador->getProcesador() ?>'></td>
                
            </tr>
            <tr>
                <td><font face="Emmett" size="+2">Memoria RAM:</font></td>
                <td><input type='text' name='memoria' value='<?php echo $computador->getMemoria() ?>'></td>
                
            </tr>
            <tr>
                <td><font face="Emmett" size="+2">Disco Duro:</font></td>
                <td><input type='text' name='disco' value='<?php echo $computador->getDisco() ?>'></td>
                
            </tr>
            <tr>
                <td><font face="Emmett" size="+2">Fecha Fabricación:</font></td>
                <td><input type='text' name='fecha' value='<?php echo $computador->getAnio_fabricacion() ?>'></td>
            </tr>
            <input type='hidden' name='actualizar' value='actualizar'>
        </table></center><br>
       <center><button class="actbtn" type='submit' value='GUARDAR'>Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="actbtn" type='reset' value='BORRAR'>Borrar</button>
    </form>
    <center><br><table class="tbla"><td><a class="atras" href='mostrar.php'>Volver</a></td></table></center><br><br>
    </body>
    
    
 <center><footer><font size="3" face="Cooper Black">Administrar Computador 2019</font></center><br><br>
    <center>&copy; EDABALUSoft Soluciones Integrales 2019 por Edinson David Barrera Lugo</center>
    </footer>
    </html>
        