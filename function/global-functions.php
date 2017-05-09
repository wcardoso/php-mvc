<?php
function chck_array ($array, $key){
	if (isset($array[$key]) && ! empty($array[$key])){
		return $array[$key];
	}
	return null;
}

//Função para carregar todas as classes por padrão, por isso vai concatenando 
function __autoload($class_name){
	$file = ABSPATH . '/classes/class-'.$class_name . '.php';
	if (! file_exists($file)) {
		require_once ABSPATH . '/includes/404.php';
		return;
	}
	//está incluindo os arquivos de classe
	require_once $file

}