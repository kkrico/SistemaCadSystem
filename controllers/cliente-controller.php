<?php

/**
 * Controller que contem as operações para cliente
 *
 * @version 1.0
 * @author dframos
 */
class ClienteController extends MainController {

    public function novo() {
        
        $this->title = 'Cadastro de Clientes';

        $modelo = $this->load_model('cliente/novo-cliente-model');

        require ABSPATH . '/views/_includes/header.php';
        require ABSPATH . '/views/_includes/menu.php';
        require ABSPATH . '/views/cliente/novocliente-view.php';
        require ABSPATH . '/views/_includes/footer.php';
    }
}