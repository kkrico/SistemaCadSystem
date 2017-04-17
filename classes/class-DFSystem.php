<?php

/**
 * DFSystem short summary.
 *
 * DFSystem description.
 *
 * @version 1.0
 * @author ramos
 */
class DFSystem
{
    private $controlador;
    private $acao;
    private $parametros;
    private $not_found = '/includes/404.php';


    public function __construct(){

        $this->get_url_data();

		/**
         * Verifica se o controlador existe. Caso contrário, adiciona o
         * controlador padrão (controllers/home-controller.php) e chama o método index().
         */
		if ( ! $this->controlador ) {

			// Adiciona o controlador padrão
			require_once ABSPATH . '/controllers/home-controller.php';

			// Cria o objeto do controlador "home-controller.php"
			// Este controlador deverá ter uma classe chamada HomeController
			$this->controlador = new HomeController();

			// Executa o método index()
			$this->controlador->index();

			// FIM :)
			return;

		}

		// Se o arquivo do controlador não existir, não faremos nada
		if ( ! file_exists( ABSPATH . '/controllers/' . $this->controlador . '.php' ) ) {
			// Página não encontrada
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

		// Remove caracteres inválidos do nome da ação (método)
		$this->acao = preg_replace( '/[^a-zA-Z]/i', '', $this->acao );

		// Se o método indicado existir, executa o método e envia os parâmetros
		if ( method_exists( $this->controlador, $this->acao ) ) {
			$this->controlador->{$this->acao}( $this->parametros );

			// FIM :)
			return;
		} // method_exists

		// Sem ação, chamamos o método index
		if ( ! $this->acao && method_exists( $this->controlador, 'index' ) ) {
			$this->controlador->index( $this->parametros );

			// FIM :)
			return;
		} // ! $this->acao

		// Página não encontrada
		require_once ABSPATH . $this->not_found;

		// FIM :)
		return;
    }

    public function get_url_data () {

		// Verifica se o parâmetro path foi enviado
		if ( isset( $_GET['path'] ) ) {

			// Captura o valor de $_GET['path']
			$path = $_GET['path'];

			// Limpa os dados
            $path = rtrim($path, '/');
            $path = filter_var($path, FILTER_SANITIZE_URL);

			// Cria um array de parâmetros
			$path = explode('/', $path);

			// Configura as propriedades
			$this->controlador  = chk_array( $path, 0 );
			$this->controlador .= '-controller';
			$this->acao         = chk_array( $path, 1 );

			// Configura os parâmetros
			if ( chk_array( $path, 2 ) ) {
				unset( $path[0] );
				unset( $path[1] );

				// Os parâmetros sempre virão após a ação
				$this->parametros = array_values( $path );
			}


			// DEBUG
			//
			// echo $this->controlador . '<br>';
			// echo $this->acao        . '<br>';
			// echo '<pre>';
			// print_r( $this->parametros );
			// echo '</pre>';
		}

	}
}