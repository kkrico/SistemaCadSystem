<?php

/**
 * DFSystem short summary.
 *
 * DFSystem description.
 *
 * @version 1.0
 * @author ramos
 */
class CadSystem
{
    private $controlador;
    private $acao;
    private $parametros;
    private $not_found = '/includes/404.php';


    public function __construct(){

        $this->get_url_data();

		/**
         * Verifica se o controlador existe. Caso contr�rio, adiciona o
         * controlador padr�o (controllers/home-controller.php) e chama o m�todo index().
         */
		if ( ! $this->controlador ) {

			// Adiciona o controlador padr�o
			require_once ABSPATH . '/controllers/home-controller.php';

			// Cria o objeto do controlador "home-controller.php"
			// Este controlador dever� ter uma classe chamada HomeController
			$this->controlador = new HomeController();

			// Executa o m�todo index()
			$this->controlador->index();

			// FIM :)
			return;

		}

		// Se o arquivo do controlador n�o existir, n�o faremos nada
		if ( ! file_exists( ABSPATH . '/controllers/' . $this->controlador . '.php' ) ) {
			// P�gina n�o encontrada
			require_once ABSPATH . $this->not_found;

			// FIM :)
			return;
		}

		require_once ABSPATH . '/controllers/' . $this->controlador . '.php';

		$this->controlador = preg_replace( '/[^a-zA-Z]/i', '', $this->controlador );

		if ( ! class_exists( $this->controlador ) ) {
			require_once ABSPATH . $this->not_found;

			return;
		}

		$this->controlador = new $this->controlador( $this->parametros );

		// Remove caracteres inv�lidos do nome da a��o (m�todo)
		$this->acao = preg_replace( '/[^a-zA-Z]/i', '', $this->acao );

		// Se o m�todo indicado existir, executa o m�todo e envia os par�metros
		if ( method_exists( $this->controlador, $this->acao ) ) {
			$this->controlador->{$this->acao}( $this->parametros );

			// FIM :)
			return;
		} // method_exists

		// Sem a��o, chamamos o m�todo index
		if ( ! $this->acao && method_exists( $this->controlador, 'index' ) ) {
			$this->controlador->index( $this->parametros );

			// FIM :)
			return;
		} // ! $this->acao

		// P�gina n�o encontrada
		require_once ABSPATH . $this->not_found;

		// FIM :)
		return;
    }

    public function get_url_data () {

		// Verifica se o par�metro path foi enviado
		if ( isset( $_GET['path'] ) ) {

			// Captura o valor de $_GET['path']
			$path = $_GET['path'];

			// Limpa os dados
            $path = rtrim($path, '/');
            $path = filter_var($path, FILTER_SANITIZE_URL);

			// Cria um array de par�metros
			$path = explode('/', $path);

			// Configura as propriedades
			$this->controlador  = chk_array( $path, 0 );
			$this->controlador .= '-controller';
			$this->acao         = chk_array( $path, 1 );

			// Configura os par�metros
			if ( chk_array( $path, 2 ) ) {
				unset( $path[0] );
				unset( $path[1] );

				// Os par�metros sempre vir�o ap�s a a��o
				$this->parametros = array_values( $path );
			}
		}
	}
}