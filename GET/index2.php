<?php

// $_GET
// pega uma informação a partir da url
if (isset($_GET['nome'])){
$nome = $_GET['nome'];
}else{
    $nome = "Mundo";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php if ($nome=="Lucas"){ echo "style='backgound:red; color:white' ";}?>>
    <h1>Olá <?php $nome; ?></h1>

    <a href="index.php?nome=Pedro">Ir para Pedro<br></a>
    <a href="index.php?nome=Mateus">Ir para Mateus<br></a>
    <a href="index.php?nome=Lucas">Ir para Lucas<br></a>
</body>
</html>