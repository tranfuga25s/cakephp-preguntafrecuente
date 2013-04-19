<?php
/********************************************************************
 * Clase predeterminada para el uso de las preguntas frecuentes
 * @author Esteban Zeller
 * @version 1
 * @package PreguntaFrecuente
 ********************************************************************/
class PreguntaFrecuenteController extends PreguntaFrecuenteAppController {
	
	public $components = array( 'RequestHandler' );

	/**
	 * Muestra la pagina de inicio
	 * @return void
	 */
	public function index() {}
	
	/**
	 * Devuelve un array con todos los elementos más comentados
	 * @return array Preguntas más comentadas
	 */
	public function mascomentado() {
		$this->autoRender = false;
		return $this->PreguntaFrecuente->masComentado();
	}
	
	/***
	 * Devuelve un array con todos los elementos más leidos
	 * @return array Preguntas más leidas
	 */
	public function masleido() {
		$this->autoRender = false;
		return $this->PreguntaFrecuente->masLeido();
	}
	
	/***
	 * Devuelve un arrray con todos los elementos más utiles
	 * @return array Preguntas mas marcadas como util
	 */
	public function masutil() {
		$this->autoRender = false;
		return $this->PreguntaFrecuente->masUtil();
	} 
	
}
