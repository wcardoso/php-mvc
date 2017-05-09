<?php

/**
* 
*/
class ClienteMvc {
	//valor do controlador, que vem da url
	private $controlador;

	//recebera o valor da ação

	private $acao;

	//recebera um array dos parametros

	private $parametros;

	//recebe página não encontrada

	private $error = '/includes/404.php';

	//Obterá valores do controlador, acao, parametros

	public function __construct (){
		$this->get_url_data();
		// Obtém os valores do controlador, ação e parâmetros da URL.
		// E configura as propriedades da classe.
		if (! this->controlador){
			require_once ABSPATH . '/controllers/home-controller.php';
			$this->controlador = new HomeController();

			$this->controlador->index();

			return;
		}

		if ( ! file_exists( ABSPATH . '/controllers/' . $this->controlador . '.php' ) ) {
			// Página não encontrada
			require_once ABSPATH . $this->not_found;
			
			// FIM
			return;
		}
		require_once ABSPATH . '/controllers/' . $this->controlador . '.php';
		// Remove caracteres inválidos do nome do controlador para gerar o nome
		// da classe.
		$this->controlador = preg_replace('/[^a-zA-Z]/i', '', $this->controlador);

		if (! class_exists($this->controlador)) {
			require_once ABSPATH . $this->not_found;

			return;
		}

		


	}


}