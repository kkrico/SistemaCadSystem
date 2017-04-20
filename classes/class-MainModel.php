<?php
/**
 * MainModel - Modelo geral
 *
 * @since 0.1
 */
class MainModel
{
	public $form_data;
	public $form_msg;
	public $form_confirma;
	public $db;
	public $controller;
	public $parametros;
	public $userdata;

	public function inverte_data( $data = null ) {
	
		$nova_data = null;
		
		if ( $data ) {
		
			$data = preg_split('/\-|\/|\s|:/', $data);
			
			$data = array_map( 'trim', $data );
			
			$nova_data .= chk_array( $data, 2 ) . '-';
			$nova_data .= chk_array( $data, 1 ) . '-';
			$nova_data .= chk_array( $data, 0 );
			
			if ( chk_array( $data, 3 ) ) {
				$nova_data .= ' ' . chk_array( $data, 3 );
			}
			
			if ( chk_array( $data, 4 ) ) {
				$nova_data .= ':' . chk_array( $data, 4 );
			}
			
			if ( chk_array( $data, 5 ) ) {
				$nova_data .= ':' . chk_array( $data, 5 );
			}
		}
		
		return $nova_data;
	}
}