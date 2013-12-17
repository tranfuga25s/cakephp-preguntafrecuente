<?php
/********************************************************************
 * Clase predeterminada para el uso de las preguntas frecuentes
 * @author Esteban Zeller
 * @version 1
 * @package PreguntaFrecuente
 ********************************************************************/
class PreguntaFrecuenteController extends PreguntaFrecuenteAppController {
	
	public $components = array( 'RequestHandler' );
    
    public $uses = array( 'PreguntaFrecuente.Pregunta', 
                          'PreguntaFrecuente.Categoria' );

	/**
	 * Muestra la pagina de inicio
	 * @return void
	 */
	public function index() {
	    $categorias = $this->Pregunta->Categoria->find( 'list' );
        $this->set( 'categorias', $categorias );
	}
	
	/**
	 * Devuelve un array con todos los elementos más comentados
	 * @return array Preguntas más comentadas
	 */
	public function mascomentado() {
		$this->autoRender = false;
		//return $this->Pregunta->masComentado();
		return array();
	}
	
	/***
	 * Devuelve un array con todos los elementos más leidos
	 * @return array Preguntas más leidas
	 */
	public function masleido() {
		$this->autoRender = false;
		return $this->Pregunta->masLeido();
	}
	
	/***
	 * Devuelve un arrray con todos los elementos más utiles
	 * @return array Preguntas mas marcadas como util
	 */
	public function masutil() {
		$this->autoRender = false;
		return $this->Pregunta->masUtil();
	} 
	
    
    public function administracion_index() {
        $this->set( 'preguntas', $this->paginate() );
    }

    public function administracion_add() {
        $categorias = $this->Pregunta->Categoria->find('list');
        $this->set( compact( 'categorias' ) );
    }
}
