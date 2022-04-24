<?php

$carros = array("fusca","gol","fusion");
//  ORDEM ALFABÉTICA rsort() faz o contrário, para matriz associatica é asort() de acordo com o valor
// ksort() é pela chave, Krsort() é ao contrário
sort($carros);

foreach($carros as $carro){
    echo $carro. "<br>";
}

?>