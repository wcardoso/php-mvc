<?php

//Nome database
define ('DB_NAME','cliente');
//Nome user db
define ('DB_USER','root');
//Password não aceita md5 ou sha
define ('DB_PASSWORD','123456');
//endereço do servidor
define('DB_HOST', 'localhost');

//ser usada para chamar os outros arquivos  e templates via PHP
if (!defined('ABSPATH'))
		define('ABSPATH', dirname(__FILE__).'/');

//Definindo a url padrão
if (!defined('BASEURL'))
		define('BASEURL', '/php_mvc_oo/');

//local onde tem as configurãções do banco
if (!defined('DBAPI')) 
		define('DBAPI', ABSPATH.'includes/db.php');
//cabeçalho e rodapé templates
define ('CAB_TEMPLATE', ABSPATH.'includes/cab.php');
define ('ROD_TEMPLATE', ABSPATH.'includes/rod.php');

define ('DB_CHAR','utf8');
require_once ABSPATH . '/loader.php';

define ('DEBUG',true);
?>