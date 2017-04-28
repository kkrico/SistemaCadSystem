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

        $pessoa = $this->buscarPessoa();
        $query = $this->db->insert( 'tb_pessoa', $pessoa );

        if ( $query ) {
            
            $this->redirectComMessagem(TipoMensagem::SUCESSO, HOME_URI . "/cliente/novo", "Inserido com sucesso");
			$this->form_msg = '<p class="success">Notícia atualizada com sucesso!</p>';
			return true;
		} 

        $this->redirectComMessagem(TipoMensagem::ALERTA, HOME_URI . "/cliente/novo", $query);
        return false;

    }

    private function buscarPessoa() {
        if ( 'POST' != $_SERVER['REQUEST_METHOD']) {
			return null;
		}

        return array("nome" => $_POST["nome"],
            "sobrenome" => $_POST["sobrenome"],
            "rg" => $_POST["rg"],
            "cpf" => $_POST["cpf"],
            "email" => $_POST["email"],
            "sexo" => $_POST["sexo"], 
            "datanascimento" => $_POST["datanascimento"],
            "datacadastro" => date_create('now')->format('Y-m-d H:i:s'));
    }

    private function redirectComMessagem($tipoMensagem, $url, $msg){
        
        header("Location: ".$url);
        $_SESSION["TipoMensagem"] = $tipoMensagem;
        $_SESSION["Mensagem"] = $msg;
    }
}