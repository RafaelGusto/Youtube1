<?php
/*
MANIPULAÇÃO DE ARQUIVOS

fopen() -> abre o arquivos
fwrite() -> escreve no arquivo
fclose() -> fecha o arquivo
feof() -> durante a leitura, avisa que chegou no final do arquivo
fgets() -> pega uma linha do arquivo até no máximo 1024bytes.
file_put_contents() -> da pra gerar html
file_get_contents() -> pega todo o caminho de um arquivo e transforma em uma string unica
unlink() -> deleta um arquivo
copy() -> copia um arquivo

*/

$pasta = "arquivos/";

if (!is_dir($pasta)){
    mkdir($pasta, 0755);
}

$nome_arquivo = date('y-m-d-H-i-s').".txt";
echo $nome_arquivo;
$arquivo = fopen($pasta.$nome_arquivo, 'a+');
fwrite($arquivo, 'Uma linha injetada no PHP'.PHP_EOL);
fwrite($arquivo, 'Uma linha injetada no 2'.PHP_EOL);
fwrite($arquivo, 'Uma linha injetada no 3'.PHP_EOL);
fclose($arquivo);

$caminhoArquivo = $pasta.$nome_arquivo;

if (file_exists($caminhoArquivo) && is_file($caminhoArquivo)){
    //pega todo o arquivo em uma string só
    echo file_get_contents($caminhoArquivo);
    /*  abre linha por linha
     $abrirArquivo = fopen($caminhoArquivo,'r');

    while(!feof($abrirArquivo)){
        echo fgets($abrirArquivo)."<br>";
    }

    fclose($abrirArquivo); 
*/
}
echo "<br><br><br>";
if (is_dir($pasta)){
    //scandir mosta o que tem dentro da pasta
    //print_r(scandir($pasta));
    foreach(scandir($pasta) as $arquivo){
        $caminho = $pasta.$arquivo;
        if(is_file($caminho)){
            unlink($caminho);
        }
    }

    rmdir($pasta);
}

/* copia um arquivo
copy('teste.txt', 'teste2.txt');
*/
?>