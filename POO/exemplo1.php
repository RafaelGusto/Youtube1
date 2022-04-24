<?php

class Carro{
//PROPRIEDADES
    public $modelo;
    public $cor;
//MÉTODOS
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }


}
$carro1 = new Carro();
$carro1->setModelo("Uno");

$carro2 = new Carro();
$carro2->setModelo("Gol");

echo "o carro1 é ". $carro1-> getModelo();
echo "<br>";
echo "o carro2 é ". $carro2-> getMOdelo();


?>