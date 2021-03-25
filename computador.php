<?php

class Computador{
    private $id;
    private $tipo;
    private $marca;
    private $procesador;
    private $memoria;
    private $disco;
    private $anio_fabricacion;
    
    function __construct(){}
    
    public function getTipo(){
    return $this->tipo;
}
    public function setTipo($tipo){
    $this->tipo = $tipo;
}
    public function getMarca(){
    return $this->marca;
}
    public function setMarca($marca){
    $this->marca = $marca;
}
    public function getProcesador(){
    return $this->procesador;
}
    public function setProcesador($procesador){
    $this->procesador = $procesador;
}
    public function getMemoria(){
    return $this->memoria;
}
    public function setMemoria($memoria){
    $this->memoria = $memoria;
}
    public function getDisco(){
    return $this->disco;
}
    public function setDisco($disco){
    $this->disco = $disco;
}
    public function getAnio_fabricacion(){
    return $this->anio_fabricacion;
}
    public function setAnio_fabricacion($anio_fabricacion){
    $this->anio_fabricacion = $anio_fabricacion;
}
    public function getId(){
    return $this->id;
}
    public function setId($id){
    $this->id = $id;
}

}
?>

