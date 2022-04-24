<?php
// Arrays (matrizes)

$carros = array("fusca","uno","gol");
$qtd = count($carros);

//for ($i = 0; $i < $qtd; $i++){
//    echo $carros[$i];
//    echo "<br>";
//}

foreach ($carros as $carro){
    echo $carro. "<br>";
}

?>