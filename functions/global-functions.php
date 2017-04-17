<?php
/**
 * Verifica chaves de arrays
 *
 * Verifica se a chave existe no array e se ela tem algum valor.
 * Obs.: Essa funчуo estс no escopo global, pois, vamos precisar muito da mesma.
 *
 * @param array  $array O array
 * @param string $key   A chave do array
 * @return string|null  O valor da chave do array ou nulo
 */
function chk_array ( $array, $key ) {
	// Verifica se a chave existe no array
	if ( isset( $array[ $key ] ) && ! empty( $array[ $key ] ) ) {
		// Retorna o valor da chave
		return $array[ $key ];
	}

	// Retorna nulo por padrуo
	return null;
}

function __autoload($class_name) {
	$file = ABSPATH . '/classes/class-' . $class_name . '.php';

	if ( ! file_exists( $file ) ) {
		require_once ABSPATH . '/includes/404.php';
		return;
	}

    require_once $file;
}


/**
 * Funчуo que serve de URL Rewrite caso esteja usando Built in Server
 */
if (BUILTINWEBSERVER) {

    if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
        return false;
    } else {
        $path = $_SERVER["REQUEST_URI"];

        if ($path[0] == "/") {
            $path = substr($path, 1);
        }
        $_GET['path'] = $path;

        if (strlen($path) == 0) {
            unset($_GET['path']);
        }

        include ABSPATH . '/index.php';
    }
}
