<?php
// $_GET
if (isset($_GET['nome'])&&isset($_GET['idade'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    echo "<h1> O nome é $nome e a idade é $idade</h1>";
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
        <form method="get" action="recebe_get.php">
            <input type="text" name="nome" placeholder="digite seu nome aqui"><br>
            <input type="text" name="idade" placeholder="digite sua idade aqui"><br>
            <hr><button type="submite">Enviar</button>
        </form>
</body>
</html>