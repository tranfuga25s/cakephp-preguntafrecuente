<?php
App::uses('PreguntaFrecuenteAppController', 'PreguntaFrecuente.Controller');
/**
 * Categorias Controller
 *
 * @property Categoria $Categoria
 */
class CategoriasController extends PreguntaFrecuenteAppController {
    
    public $uses = array( 'PreguntaFrecuente.Categoria' );

    /**
     * administracion_index method
     *
     * @return void
     */
	public function administracion_index() {
		$this->Categoria->recursive = 0;
        $categorias = $this->paginate();
        foreach( $categorias as &$cat ) {
            $cat['Categoria']['ruta'] = $this->Categoria->getPath( intval( $cat['Categoria']['id_categoria'] ), array( 'nombre' ) );
        }
		$this->set( 'categorias', $categorias );
	}

    /**
     * administracion_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
	public function administracion_view($id = null) {
		if (!$this->Categoria->exists($id)) {
			throw new NotFoundException( "Categoría invalida" );
		}
		$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
		$this->set('categoria', $this->Categoria->find('first', $options));
	}

    /**
     * administracion_add method
     *
     * @return void
     */
	public function administracion_add() {
		if ($this->request->is('post')) {
			$this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash( "La categoría fue guardada correctamente", null, array( 'class' => 'success' ) );
				$this->redirect( array( 'action' => 'index' ) );
			} else {
				$this->Session->setFlash( 'La categoría no pudo ser guardada. Intente nuevamente.', null, array( 'class' => 'error' ) );
			}
		}
		$parents = $this->Categoria->generateTreeList();
		$this->set( compact( 'parents' ) );
	}

    /**
     * administracion_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
	public function administracion_edit($id = null) {
		if (!$this->Categoria->exists($id)) {
			throw new NotFoundException(__('Invalid categoria'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
			$this->request->data = $this->Categoria->find('first', $options);
		}
		$parents = $this->Categoria->generateTreeList();
        $this->set( compact( 'parents' ) );
	}

    /**
     * administracion_delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
	public function administracion_delete($id = null) {
		$this->Categoria->id = $id;
		if (!$this->Categoria->exists()) {
			throw new NotFoundException(__('Invalid categoria'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoria->delete()) {
			$this->Session->setFlash(__('Categoria deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Categoria was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
