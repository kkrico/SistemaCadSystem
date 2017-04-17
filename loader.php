<?php

if ( ! defined('ABSPATH')) exit;

// Inicia a sess�o
session_start();

// Verifica o modo para debugar
if ( ! defined('DEBUG') || DEBUG === false ) {

	// Esconde todos os erros
	error_reporting(0);
	ini_set("display_errors", 0);

} else {

	// Mostra todos os erros
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

}

// Fun��es globais
require_once ABSPATH . '/functions/global-functions.php';

$dfSystem = new DFSystem();