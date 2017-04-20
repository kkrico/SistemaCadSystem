<?php

/**
 * cadastro_cliente_model short summary.
 *
 * cadastro_cliente_model description.
 *
 * @version 1.0
 * @author dframos
 */
class NovoClienteModel extends MainModel
{
    public function __construct( $db = false, $controller = null ) {
		// Configura o DB (PDO)
		$this->db = $db;
		
		// Configura o controlador
		$this->controller = $controller;

		// Configura os parâmetros
		$this->parametros = $this->controller->parametros;

		// Configura os dados do usuário
		$this->userdata = $this->controller->userdata;
	}

    public function cadastrarCliente() {
        
		if ( 'POST' != $_SERVER['REQUEST_METHOD']) {
			return;
		}

        if ( chk_array( $this->parametros, 0 ) == 'edit' ) {
			return;
		}

        
        $query = $this->db->insert( 'tb_pessoa', $_POST );

        if ( $query ) {
            
			$this->form_msg = '<p class="success">Notícia atualizada com sucesso!</p>';
			return;
		} 

        $this->form_msg = '<p class="error">Erro ao enviar dados!</p>';
    }
}