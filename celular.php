<?php
require_once'controlador.php';

class Celular implements Controlador{
    private $volume;
    private $ligacao;
    private $ligado;
    
    public function Celular(){
        $this->ligado=false; //celular está desligado
        $this->ligacao=false; //não está ocorrendo uma ligação
        $this->volume=50;
    }
    private function setVolume($v){
        $this->volume=$v;
    }
    private function getVolume(){
        return $this->volume;
    }
    private function setLigacao($l){
        $this->ligacao=$l;
    }
    private function getLigacao(){
        return $this->ligacao;
    }
    private function setLigado($o){
        $this->ligado=$o;
    }
    private function getLigado(){
        return $this->ligado;
    }
    public function ligarcelular(){
        if ($this->getLigado()==false){
            $this->setLigado(true);
            echo "<p>O celular está ligado...</p>";
        }
    }
    public function desligarcelular(){
        if ($this->getLigado()==true){
            $this->setLigado(false);
            $this->setVolume(0);
            echo "<p>O celular está desligando...</p>";
        }
    }
    public function maisVolume(){
        if ($this->getLigado()== true){
            $this->setVolume($this->getVolume()+10);
        }
    }
    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume()-10);
        }
    }
    public function mutar(){
        if ($this->getLigado()==true && $this->getVolume()>0){
            $this->setVolume(0);
            echo "<p>O celular está mutado...</p>";
        }
    }
    public function desmutar(){
        if ($this->getLigado()==true && $this->getVolume()==0){
            $this->setVolume(50);
            echo "<p>O celular está com volume...</p>";
        }
    }
    public function fazerligacao(){
        if ($this->getLigado()==true){
            $this->setLigacao(true);
            echo "<p>Realizando Ligação...</p>";
        }
    }
    public function encerrarligacao(){
        if ($this->getLigado()==true){
            $this->setLigacao(false);
            echo "<p>Encerrando Ligação...</p>";
        }
    }
}    