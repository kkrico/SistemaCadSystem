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


        if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
			return;
		}

		/*
		Para evitar conflitos apenas inserimos valores se o parâmetro edit
		não estiver configurado.
         */
		if ( chk_array( $this->parametros, 0 ) == 'edit' ) {
			return;
		}

		// Só pra garantir que não estamos atualizando nada
		if ( is_numeric( chk_array( $this->parametros, 1 ) ) ) {
			return;
		}


        $pessoa = $this->buscarPessoa();
		$query = $this->db->insert( 'tb_pessoa', $pessoa );
        foreach ($tipoTelefone as $_POST["tipotelefone"])
        {
        	
        }
        

		if ( $query ) {
			$this->form_msg = '<p class="success">Cliente cadastrado com sucesso</p>';
			return;

		}

		$this->form_msg = '<p class="error">Erro ao enviar dados!</p>';
    }

    private function buscarPessoa() {
        if ( 'POST' != $_SERVER['REQUEST_METHOD']) {
			return null;
		}


        $cpf = $_POST["cpf"];

        $cpf = str_replace("-", "", $cpf);
        $cpf = str_replace(".", "", $cpf);

        return array("nome" => $_POST["nome"],
            "sobrenome" => $_POST["sobrenome"],
            "rg" => ($_POST["rg"] === "" ? null : $_POST["rg"]),
            "cpf" => str_replace("-", "", $cpf),
            "email" => $_POST["email"],
            "sexo" => str_replace("/","",$_POST["sexo"]),
            "datanascimento" => ($_POST["datanascimento"] === "" ? null : $_POST["datanascimento"]),
            "datacadastro" => date_create('now')->format('Y-m-d H:i:s'));
    }

    private function redirectComMessagem($tipoMensagem, $url, $msg){

        header("Location: ".$url);
        $_SESSION["TipoMensagem"] = $tipoMensagem;
        $_SESSION["Mensagem"] = $msg;
    }
}