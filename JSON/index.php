<?php
/*
No PHP essas funções de conversão são:

jason_encode()
Converte array/obj em texto, uma string JSON;

json_decode()
Converte um texto JSON em um objeto ou matriz.

*/

$texto = $_POST['texto'];
$dados = json_decode($texto, true);

$dados['professor'] = "Lindo";

$json = json_encode($dados);

echo $json;

?>