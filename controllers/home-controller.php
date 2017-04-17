<?php

/**
 * Controller da p�gina inicial.
 *
 *
 * @version 1.0
 * @author ramos
 */
class HomeController extends MainController
{

	/**
     * Carrega a p�gina "/views/home/index.php"
     */
    public function index() {
		// T�tulo da p�gina
		$this->title = 'Home';

		// Parametros da fun��o
		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

		// Essa p�gina n�o precisa de modelo (model)

		/** Carrega os arquivos do view **/

		// /views/_includes/header.php
        require ABSPATH . '/views/_includes/header.php';

		// /views/_includes/menu.php
        require ABSPATH . '/views/_includes/menu.php';

		// /views/home/home-view.php
        require ABSPATH . '/views/home/home-view.php';

		// /views/_includes/footer.php
        require ABSPATH . '/views/_includes/footer.php';

    } // index

} // class HomeController