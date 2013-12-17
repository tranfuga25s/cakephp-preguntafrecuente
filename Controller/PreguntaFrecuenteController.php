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
	    $categorias = $this->Pregunta->Categoria->find( 'list', array( 'conditions' => array( 'parent_id != ' => null ) ) );
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
        if( $this->request->is( 'post' ) ) {
            $this->Pregunta->create();
            if( $this->Pregunta->save( $this->request->data ) ) {
                $this->Session->correcto( 'La pregunta fue guardada correctamente' );
                $this->redirect( array( 'action' => 'index' ) );
            } else {
                $this->Session->incorrecto( 'La pregunta no se pudo guardar' );
            }
        }
        $categorias = $this->Pregunta->Categoria->generateTreeList();
        $this->set( compact( 'categorias' ) );
    }
    
    public function administracion_edit( $id_pregunta = null ) {
        if( $this->request->is( 'post' ) ) {
            if( $this->Pregunta->save( $this->request->data ) ) {
                $this->Session->correcto( 'La pregunta fue guardada correctamente' );
                $this->redirect( array( 'action' => 'index' ) );
            } else {
                $this->Session->incorrecto( 'La pregunta no se pudo guardar' );
            }
        } else {
            $this->Pregunta->id = $id_pregunta;
            if( !$this->Pregunta->exists() ) {
                throw new NotFoundException( "La pregunta no existe!" );
            }
            $this->request->data = $this->Pregunta->read( null, $id_pregunta );
        }
        $categorias = $this->Pregunta->Categoria->generateTreeList();
        $this->set( compact( 'categorias' ) );
        
    }
}
