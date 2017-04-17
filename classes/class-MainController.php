<?php
/**
 * MainController - Todos os controllers dever�o estender essa classe
 */
class MainController
{

	/**
     * $db
     *
     * Nossa conex�o com a base de dados. Manter� o objeto PDO
     *
     * @access public
     */
	public $db;

	/**
     * $phpass
     *
     * Classe phpass
     *
     * @see http://www.openwall.com/phpass/
     * @access public
     */
	public $phpass;

	/**
     * $title
     *
     * T�tulo das p�ginas
     *
     * @access public
     */
	public $title;

	/**
     * $login_required
     *
     * Se a p�gina precisa de login
     *
     * @access public
     */

	/**
     * $parametros
     *
     * @access public
     */
	public $parametros = array();

	/**
     * Construtor da classe
     *
     * Configura as propriedades e m�todos da classe.
     *
     * @since 0.1
     * @access public
     */
	public function __construct ( $parametros = array() ) {

	}

	/**
     * Load model
     *
     * Carrega os modelos presentes na pasta /models/.
     *
     * @since 0.1
     * @access public
     */
	public function load_model( $model_name = false ) {

		if ( ! $model_name ) return;

		$model_name =  strtolower( $model_name );

		$model_path = ABSPATH . '/models/' . $model_name . '.php';

		if ( file_exists( $model_path ) ) {

			require_once $model_path;

			$model_name = explode('/', $model_name);

			$model_name = end( $model_name );

			$model_name = preg_replace( '/[^a-zA-Z0-9]/is', '', $model_name );

			if ( class_exists( $model_name ) ) {

				return new $model_name( $this->db, $this );
			}

			return;

		}
	}
}