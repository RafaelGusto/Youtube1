<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Upload de arquivos</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-5 text-center">Upload de arquivos</h1>
        <form method="post" enctype="multipart/form-data" class="m-3">
            <div class="input-group">
                <input type="file" class="form-control" id="arquivo" name="arquivo" aria-describedby="arquivo"
                    aria-label="Upload" required>
                <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
            </div>
        </form>
    </div>

    <?php

    if(isset($_POST['enviar'])){
        //echo "<pre>";
        //var_dump($_FILES);
        //echo "</pre>";

        //VALIDAÇÕES
        $tamanhoMax = 2097152;
        $permitido = array("jpg","png","jpeg","mp4");
        $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

        //VERIFICAR SE TEM TAMANHO PERMITIDO
        if($_FILES['arquivo']['size'] >= $tamanhoMax){
            echo " tamanho máximo extrapolado";
        }else{
            //VERIFICAR SE EXTENSÃO É PERMITIDA
            if(in_array($extensao, $permitido)){
                //echo "permitido";
                $pasta = "imagens/";
                if(!is_dir($pasta)){
                    mkdir($pasta,0755);
                }

                $tmp = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if(move_uploaded_file($tmp,$pasta.$novoNome)){
                    echo "upload realizado com sucesso";
                }else{
                    echo "erro: não deu boa";
                }
            }else{
                echo "Erro: extensão ($extensao) não permitida";
            }
        }
    }
    

    ?>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>