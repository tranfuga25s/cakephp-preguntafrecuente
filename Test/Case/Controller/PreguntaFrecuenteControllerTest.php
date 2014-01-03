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
	public function testUtilNoCookie() {
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/util/1');
        $this->assertEqual( $this->controller->Cookie->check( 'PreguntaFrecuente' ), true, "No se encontró el valor de la cookie" );
        $this->assertInternalType( 'array', $this->controller->Cookie->read( 'PreguntaFrecuente'), "El valor guardado en la cookie no es un array" );
        $this->assertEqual( array( 1 ), $this->controller->Cookie->read( 'PreguntaFrecuente' ), "El array  no coincide con el guardado" );
	}

    /*public function testUtilConCookie() {
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/util/1');
        debug( "Segunda pasada" );
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/util/2');
        $this->assertEqual( $this->controller->Cookie->read( 'PreguntaFrecuente' ), array( 1, 2 ), "El array  no coincide con el guardado con cookie" );
    }

    public function testUtilConCookieRepetido() {
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/util/1');
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/util/2');
        $this->testAction('/pregunta_frecuente/pregunta_frecuente/util/2');
        $this->assertEqual( $this->controller->Cookie->read( 'PreguntaFrecuente' ), array( 1, 2 ), "El array  no coincide con el guardado cookie repetido" );
    } */

}
