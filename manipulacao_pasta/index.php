<?php
//MANIPULAÇÃO DE PASTAS

$pasta = "nova-pasta/";
$dupla = "teste/nova-pasta/";

//COMANDO PARA CRIAR PASTA
if (!is_dir($dupla)){
    //PROTEÇÃO DE PASTA 0755
    //TRUE fica depois do 0755, É PARA PODER CRIAR A DUPLA PASTA
mkdir($dupla,0755,true);
}else{
   // rmdir($pasta);
   //rename($pasta,'teste');
   //move a pasta
   rename($dupla,'nova-pasta');
}