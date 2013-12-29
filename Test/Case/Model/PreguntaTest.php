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

    public function testLecturas() {
        $id_pregunta = $this->Pregunta->find( 'first', array( 'recurisve' => -1 ) );
        $this->assertArrayHasKey( 'Pregunta', $id_pregunta, "No existe la pregunta" );
        $this->assertArrayHasKey( 'id_pregunta', $id_pregunta['Pregunta'], "No existe la pregunta" );
        $cantidad_leido = $id_pregunta['Pregunta']['leido'];
        $this->assertNotEqual( $this->Pregunta->agregarLectura(), true, "No debería de actualizase los valores si no hay un ID seteado" );
        $this->assertEqual( $this->Pregunta->agregarLectura( $id_pregunta ), true, "No debería de devolver falso si se pasa un parametro" );
        $this->Pregunta->id = $id_pregunta['Pregunta']['id_pregunta'];
        $this->assertEqual( $this->Pregunta->agregarLectura(), true, "No debería devolver falso si está seteado el ID antes de actualizar lecturas" );
        $nuevo_leido = intval( $this->Pregunta->field( 'leido' ) );
        $this->assertNotEqual( $nuevo_leido, $cantidad_leido, "No se actualizo la cantidad de lecturas" );
        $this->assertEqual( $nuevo_leido, ( $cantidad_leido + 2 ), "No se actualizó correctamente la cantidad de lecturas" );
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
