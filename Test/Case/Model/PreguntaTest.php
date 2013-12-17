<?php
App::uses('Pregunta', 'PreguntaFrecuente.Model' );

/**
 * Pregunta Test Case
 *
 */
class PreguntaTest extends CakeTestCase {

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
     * setUp method
     *
     * @return void
     */
	public function setUp() {
		parent::setUp();
		$this->Pregunta = ClassRegistry::init('PreguntaFrecuente.Pregunta');
	}
    
    
    public function testMasLeido() {
        $masleido = $this->Pregunta->masLeido();
        $this->assertNotEqual( 0, count( $masleido ), "Los mas leidos no deben ser nulos" );
        $this->assertEqual( 1, $masleido[0]['Pregunta']['id_pregunta'], "El primer elegido debe ser el registro 1" );
        $this->assertEqual( 2, $masleido[1]['Pregunta']['id_pregunta'], "El segundo elegido debe ser el registro 2" );
    }

    public function testMasUtil() {
        $masutil = $this->Pregunta->masUtil();
        $this->assertNotEqual( 0, count( $masutil ), "Los mas utiles no deben ser nulos" );
        $this->assertEqual( 2, $masutil[0]['Pregunta']['id_pregunta'], "El primer elegido debe ser el registro 1" );
        $this->assertEqual( 1, $masutil[1]['Pregunta']['id_pregunta'], "El segundo elegido debe ser el registro 2" );
    }

    /**
     * tearDown method
     *
     * @return void
     */
	public function tearDown() {
		unset($this->Pregunta);

		parent::tearDown();
	}

}
