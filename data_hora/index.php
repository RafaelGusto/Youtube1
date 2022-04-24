<?php

//DATA COMPLETA
echo date('d/m/Y');
echo "<br>";

//HORA
echo date('H:i:s');

echo "<br><br>";

//CALCULANDO DIAS ENTRE DATAS
$hoje = date('Y-m-d');
$vencimento = '2022-10-15';

$diferenca = strtotime($vencimento) - strtotime($hoje);
//FLOOR ARREDONDA OS NÚMEROS PARA INTEIROS, NESTE CASO
//VAI ARREDONDAR OS MINUTOS E SEGUNDOS PARA DIAS
$dias = floor($diferenca / (60*60*24));

//CONVERSÃO PARA O PADRAO BR
//Explode algo e separa por caractere específico
$venc = explode('-',$vencimento);
$venc_formatado = $venc[2]."/".$venc[1]."/".$venc[0];

$data_hoje = explode('-',$hoje);
$hoje_formatado = $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

echo "Vencimento é dia $venc_formatado <br>";
echo "hoje é dia $hoje_formatado <br>";
echo "a diferença é de $dias dias entre as datas";

echo "<br><br>";

//COMPARAR DUAS DATAS MAIOR OU MENOR
$data1 = date('Y-m-d');
$data2 = '2021-09-20';

if (strtotime($data1) > strtotime($data2)){
    echo "A fatura está vencida";
}elseif(strtotime($data1) == strtotime($data2)){
echo "A fatura vence hoje";
}else{
    echo "a fatura ainda não venceu";
}

?>