<?php
session_start();

$_SESSION['nome'] = "Dimitri";
$_SESSION['profissao'] = "Professor";

//session_unset();

/*
//INICIAR UMA SESSÃO
session_start()

//CRIAR / MODIFICAR VARIÁVEL DE SESSÃO
$_SESSION['nome'] = "Dimitri";
$_SESSION['profissao'] = "Professor";

//REMOVER TODAS AS VARIAVEIS DE SESSAO
session_unset(); ou $_SESSION = array();

//DESTRUIR A SESSÃO
session_destroy();

*/

?>