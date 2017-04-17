<?php
/**
 * Configuraчуo geral
 */

// Caminho para a raiz
define( 'ABSPATH', dirname( __FILE__ ) );

// Caminho para a pasta de uploads
define( 'UP_ABSPATH', ABSPATH . '\views\_uploads' );

// URL da home
define( 'HOME_URI', 'http://localhost:3806' );

// Nome do host da base de dados
define( 'HOSTNAME', 'localhost' );

// Nome do DB
define( 'DB_NAME', '' );

// Usuсrio do DB
define( 'DB_USER', '' );

// Senha do DB
define( 'DB_PASSWORD', '' );

// Charset da conexуo PDO
define( 'DB_CHARSET', 'utf8' );

// Se vocъ estiver desenvolvendo, modifique o valor para true
define( 'DEBUG', true );

define ('BUILTINWEBSERVER', true);

/**
 * Nуo edite daqui em diante
 */

// Carrega o loader, que vai carregar a aplicaчуo inteira
require_once ABSPATH . '/loader.php';
?>