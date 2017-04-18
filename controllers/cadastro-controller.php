<?php

/**
 * cadastro_controller Controller que contem todos os cadastros
 *
 * cadastro_controller Controller que irá manter todos os cadastros
 *
 * @version 1.0
 * @author dframos
 */
class CadastroController extends MainController
{

    public function cliente() {
        
        $this->title = 'Cadastro de Clientes';

		$parametros = ( func_num_args() >= 1 ) ? func_get_arg(0) : array();

        require ABSPATH . '/views/_includes/header.php';
        require ABSPATH . '/views/_includes/menu.php';
        require ABSPATH . '/views/cadastro/cliente-view.php';
        require ABSPATH . '/views/_includes/footer.php';
    }
}