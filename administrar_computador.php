<?php

//Incluye la clase Computador y CrudComputador
require_once('crud_computador.php');
require_once('computador.php');

$crud= new CrudComputador();
$computador= new Computador();

//Si el elemento insertar no viene nulo llama al crud e inserta un computador
if (isset($_POST['insertar'])) {
    $computador->setTipo($_POST['tipo']);
    $computador->setMarca($_POST['marca']);
    $computador->setProcesador($_POST['procesador']);
    $computador->setMemoria($_POST['memoria']);
    $computador->setDisco($_POST['disco']);
    $computador->setAnio_fabricacion($_POST['fecha']);
    //llama a la funcion insertar definida en el crud
    $crud->insertar($computador);
    header('Location: index.php');
    //Si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza
}elseif(isset($_POST['actualizar'])) {
    $computador->setId($_POST['id']);
    $computador->setTipo($_POST['tipo']);
    $computador->setMarca($_POST['marca']);
    $computador->setProcesador($_POST['procesador']);
    $computador->setMemoria($_POST['memoria']);
    $computador->setDisco($_POST['disco']);
    $computador->setAnio_fabricacion($_POST['fecha']);
    $crud->actualizar($computador);
    header('Location: mostrar.php');
    //Si la variable accion enviada por GET es == 'e' llama al crud y elimina un computador
}elseif ($_GET['accion']=='e') {
    $crud->eliminar($_GET['id']);
    header('Location: mostrar.php');
    //Si la variable accion enviada por GET es == 'a' llama al crud y elimina un computador
}elseif($_GET['accion']=='a'){
    header('Location: actualizar.php');
}

?>