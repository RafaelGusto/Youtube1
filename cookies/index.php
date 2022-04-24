<?php

/* SINTAXE
 - Criar Cookie / Modificar / Deletar
 setcookie(nomechave, valor, validade);

  - Pegar valor Cookie
  $_COOKIE['nomechave']

  */

// CRIAR UM COOKIE DE NOME
setcookie('nome','Dimitri', time()+(86400 * 30));
//DELETA COOKIE
//setcookie('nome,','', time() - 3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookies</h1>

    <?php if(isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
        echo "O valor do cookie é $nome";
    }else{
        echo "Não tem nenhum cookie";

        /*
        if(count($_COOKIE) > 0){
            echo "Tem cookies";
        }else{
            echo "não tem cookies";
        } */
    } ?>

</body>
</html>

