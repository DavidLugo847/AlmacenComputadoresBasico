<!DOCTYPE html>

<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CRUD">
    <meta name="keywords" content="HTML,CSS3,JavaScript">
    <title>CRUD - Administrar Computador</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="imagen/fav.ico"/>
        <title>Ingresar Computador</title>
    </head>
    <body>
    <header>
        <nav>
        <ul id="lista">
            <li><a title="Volver al Inicio" href="index.php">INICIO</a></li>
            <li><a title="Explora Servidores" href="enlaces/servidores.php">Servidores</a></li>
            <li><a title="Mira Productos" href="enlaces/productos.php">Productos</a></li>
            <li><a title="Visita el Feedback" href="enlaces/feed.php">Feedback</a></li>
            <li><a class="sel" title="¡Ya estás en esta Página!" href='ingresar.php'>Ingresar</a></li>
        </ul>
        </nav>
    </header>
    <center><img src="imagen/banner.png" class="imgcenterl" width="1100" height="210"></center><br>
    
    <header>
    <center><font size="5" face="Cooper Black">Ingresa los datos del Computador</font></center><br>
    </header>
    <form action='administrar_computador.php' method='post'>
    <center><table>
            <tr>
                <td><font face="Emmett" size="+2">Tipo:</font></td>
                <td><select class="chars" name="tipo">
                        <option selected>-----Elige la opcion-----</option> 
                        <option value="Escritorio">PC Escritorio</option>
                        <option value="Portatil">PC Portatil</option>
            </tr>            
            <tr>        <td><font face="Emmett" size="+2">Marca:</font></td>
                        <td><select class="chars" name="marca">   
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
                <td><input type='text' name='procesador' size="23"></td>
            </tr>
            <tr>
                <td><font face="Emmett" size="+2">Memoria RAM:</font></td>
                <td><input type='text' name='memoria' size="23"></td>
            </tr>
            <tr>
                <td><font face="Emmett" size="+2">Disco Duro:</font></td>
                <td><input type='text' name='disco' size="23"></td>
            </tr>
            <tr>
                <td><font face="Emmett" size="+2">Fecha de Fabricacion:</font></td>
                <td><input type='text' name='fecha' size="23"></td>
            </tr>
            <input type='hidden' name='insertar' value='insertar'>   
        </table></center><br>
        <center><button class="btn" type='submit' value='GUARDAR'>Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn" type='reset' value='BORRAR'>Borrar</button>
    </form>
    <center><br><table class="tbla"><td><a class="atras" href='index.php'>Volver</a></td></table></center><br><br>
       
    </body>
    </html>