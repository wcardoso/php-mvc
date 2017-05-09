<?php
//Usuário não poderá acessar ABSPATH
if (!defined('ABSPATH')) exit;

session_start();
//Não mostra todos os erros ou mostra todos os erros.
if (!defined(DEBUG)|| DEBUG === false ) {
	error_reporting(0);
	ini_set("display_errors", 0);
} else {
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
}

 require ABSPATH . '/function/global-functions.php';

 $cliente_mvc = new ClienteMvc();
?>