<?php
require_once 'celular.php';
class Telefone{
    protected $marca;
    protected $carga;

    public function setMarca($m){
        $this->marca=$m;
    }
    public function setCarga($carg){
        $this->carga=$carg;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getCarga(){
        return $this->carga;
    }
    public function carregar(){
        if ($this->carga<=10){
            echo "<p>Bateria fraca! Carregue seu celular!</p>";
        }
    }
    public function tirartomada(){
        if ($this->getCarga()==100){
            echo "<p>Bateria com 100% de carga! Retire da tomada!</p>";
        }
    }
}