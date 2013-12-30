<?php
App::uses('PreguntaFrecuenteController', 'PreguntaFrecuente.Controller');

/**
 * PreguntaFrecuenteController Test Case
 *
 */
class PreguntaFrecuenteControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.pregunta_frecuente.pregunta',
		'plugin.pregunta_frecuente.categoria'
	);

    /**
     * testIndex method
     *
     * @return void
     */
	public function testIndex() {
	    $this->testAction('/pregunta_frecuente/pregunta_frecuente/index');
        $this->assertInternalType( 'array', $this->vars['categorias']);
	}

    /**
     * testViewEmpty method
     *
     * @expectedException NotFoundException
     * @return void
     */
	public function testViewEmpty() {
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/view');
        //$this->assertInternalType( 'array', $this->vars['pregunta']);
	}

    /**
     * testView method
     *
     * @return void
     */
    public function testView() {
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/view/1');
        $this->assertInternalType( 'array', $this->vars['pregunta']);
    }

    /**
     * testUtil method
     *
     * @return void
     */
	public function testUtil() {
	}

}
