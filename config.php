<?php
/**
 * Configura��o geral
 */

// Caminho para a raiz

define( "POST", "POST");

define( "GET", "GET");

define( 'ABSPATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '\views\_uploads' );

// URL da home
define( 'HOME_URI', 'http://localhost:3806' );

// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Nome do DB
define( 'DB_NAME', 'dfsystem' );

// Usu�rio do DB
define( 'DB_USER', 'root' );

// Senha do DB
define( 'DB_PASSWORD', 'root' );

// Charset da conex�o PDO
define( 'DB_CHARSET', 'utf8' );

// Se voc� estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

define ('BUILTINWEBSERVER', true);

/**
 * N�o edite daqui em diante
 */

// Carrega o loader, que vai carregar a aplica��o inteira
require_once ABSPATH . '/loader.php';
?>