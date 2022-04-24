<?php
// $_GET
if (isset($_GET['nome'])){
$nome = htmlspecialchars($_GET['nome']);
}else{
    $nome = "Mundo";
}
if (isset($_GET['cor'])){
    $cor = htmlspecialchars($_GET['cor']);
    }else{
        $cor = "White";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        body{
            background: <?php echo $cor;?>
        }
    </Style>
</head>
<body>
    <h1>Olá <?php echo $nome; ?></h1>

    <a href="index.php?nome=Pedro">Ir para Pedro<br></a>
    <a href="index.php?nome=Mateus&cor=yellow">Ir para Mateus<br></a>
    <a href="index.php?nome=Lucas">Ir para Lucas<br></a>
</body>
</html>