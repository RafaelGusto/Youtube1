<?php
/*
No PHP essas funções de conversão são:

jason_encode()
Converte array/obj em texto, uma string JSON;

json_decode()
Converte um texto JSON em um objeto ou matriz.

*/

$texto = '{
    "cep": "80050-450",
    "logradouro": "Rua Oyapock",
    "complemento": "",
    "bairro": "Cristo Rei",
    "localidade": "Curitiba",
    "uf": "PR",
    "ibge": "4106902",
    "gia": "",
    "ddd": "41",
    "siafi": "7535"
  }';
  //para passar de objeto para matriz, usamos "true"
  $dados = json_decode($texto, true);
  //var_dump($dados);

  $dados['professor'] = "Dimitri";


  //JSON_UNESCAPED é para mostrar a acentuação
  $json = json_encode($dados,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

  echo "<pre>$json</pre>";



  //echo "<pre>$texto</pre>";

  //para objeto, usamos "->" 
  //echo $dados->bairro;

  //echo $dados['cep'];


?>