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
		$this->title = 'Home';

		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        require ABSPATH . '/views/_includes/header.php';
        require ABSPATH . '/views/_includes/menu.php';
        require ABSPATH . '/views/home/home-view.php';
        require ABSPATH . '/views/_includes/footer.php';

    } // index

} // class HomeController