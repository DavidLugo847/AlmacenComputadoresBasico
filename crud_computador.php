<?php

//Incluye la clase
require_once('conexion.php');

    class CrudComputador{
    //Constructor de la clase
        public function __construct(){}
        
        //Metodo para insertar, recibe como parametro un objeto de tipo libro
        public function insertar($computador){
            $db=Db::conectar();
            $insert=$db->prepare('INSERT INTO computador values(NULL,:tipo,:marca,:procesador,:memoria,:disco,:anio_fabricacion)');
            $insert->bindValue('tipo',$computador->getTipo());
            $insert->bindValue('marca',$computador->getMarca());
            $insert->bindValue('procesador',$computador->getProcesador());
            $insert->bindValue('memoria',$computador->getMemoria());
            $insert->bindValue('disco',$computador->getDisco());
            $insert->bindValue('anio_fabricacion',$computador->getAnio_fabricacion());
            $insert->execute();
                    
        }
        
        //Metodo para mostrar todos los computadores
        public function mostrar(){
            $db=Db::conectar();
            $listaComputador=[];
            $select=$db->query('SELECT * FROM computador');
            
            foreach ($select->fetchAll() as $computador){
                $myComputador= new Computador();
                $myComputador->setId($computador['id']);
                $myComputador->setTipo($computador['tipo']);
                $myComputador->setMarca($computador['marca']);
                $myComputador->setProcesador($computador['procesador']);
                $myComputador->setMemoria($computador['memoria']);
                $myComputador->setDisco($computador['disco']);
                $myComputador->setAnio_fabricacion($computador['anio_fabricacion']);
                $listaComputador[]=$myComputador;
            }
            return $listaComputador;
                
        }
        //Metodo para eliminar un libro, recibe comp parametro el id del computadores
        public function eliminar($id){
            $db=Db::conectar();
            $eliminar=$db->prepare('DELETE FROM computador WHERE ID=:id');
            $eliminar->bindValue('id',$id);
            $eliminar->execute();
        }
               
        //4. metodo para buscar un computador, recibe como parametro el id del computador
        public function obtenerComputador($id){
            $db=Db::conectar();
            $select=$db->prepare('SELECT * FROM computador WHERE ID=:id');
            $select->bindValue('id',$id);
            $select->execute();
            $computador=$select->fetch();
            $myComputador= new Computador();
            $myComputador->setId($computador['id']);
            $myComputador->setTipo($computador['tipo']);
            $myComputador->setMarca($computador['marca']);
            $myComputador->setProcesador($computador['procesador']);
            $myComputador->setMemoria($computador['memoria']);
            $myComputador->setDisco($computador['disco']);
            $myComputador->setAnio_fabricacion($computador['anio_fabricacion']);
            return $myComputador;
            
        }
        
        //5. metodo para actualizar un computador, recibe como parametro el computador
        public function actualizar($computador){
            $db=Db::conectar();
            $actualizar=$db->prepare('UPDATE computador SET tipo=:tipo,marca=:marca,procesador=:procesador,memoria=:memoria,disco=:disco,anio_fabricacion=:anio WHERE ID=:id');
            $actualizar->bindValue('id',$computador->getId());
            $actualizar->bindValue('tipo',$computador->getTipo());
            $actualizar->bindValue('marca',$computador->getMarca());
            $actualizar->bindValue('procesador',$computador->getProcesador());
            $actualizar->bindValue('memoria',$computador->getMemoria());
            $actualizar->bindValue('disco',$computador->getDisco());
            $actualizar->bindValue('anio',$computador->getAnio_fabricacion());
            
         $actualizar->execute();
        }
                
                
    }
    ?>
                