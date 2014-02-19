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

    public function testUtil() {
        $id_pregunta = $this->Pregunta->find( 'first', array( 'recurisve' => -1 ) );
        $this->assertArrayHasKey( 'Pregunta', $id_pregunta, "No existe la pregunta" );
        $this->assertArrayHasKey( 'id_pregunta', $id_pregunta['Pregunta'], "No existe la pregunta" );
        $cantidad_util = $id_pregunta['Pregunta']['util'];
        $this->assertNotEqual( $this->Pregunta->agregarUtil(), true, "No debería de actualizase los valores si no hay un ID seteado" );
        $this->assertEqual( $this->Pregunta->agregarUtil( $id_pregunta ), true, "No debería de devolver falso si se pasa un parametro" );
        $this->Pregunta->id = $id_pregunta['Pregunta']['id_pregunta'];
        $this->assertEqual( $this->Pregunta->agregarUtil(), true, "No debería devolver falso si está seteado el ID antes de actualizar lecturas" );
        $nuevo_util = intval( $this->Pregunta->field( 'util' ) );
        $this->assertNotEqual( $nuevo_util, $cantidad_util, "No se actualizo la cantidad de utiles" );
        $this->assertEqual( $nuevo_util, ( $cantidad_util + 2 ), "No se actualizó correctamente la cantidad de utiles" );
    }

    public function testPreguntaSimilares() {
        $id_pregunta = $this->Pregunta->find( 'first', array( 'recursive' => -1 ) );
        $this->assertArrayHasKey( 'Pregunta', $id_pregunta, "No existe la pregunta" );
        $this->assertArrayHasKey( 'id_pregunta', $id_pregunta['Pregunta'], "No existe la pregunta" );
        $id_categoria = intval( $id_pregunta['Pregunta']['categoria_id'] );
        $id_pregunta = intval( $id_pregunta['Pregunta']['id_pregunta'] );

        $parecidas = $this->Pregunta->getSimilares( $id_categoria, $id_pregunta );
        $this->assertNotEqual( 0, count( $parecidas ), "No se encontró ninguna pregunta" );
        $this->assertArrayHasKey( 'Pregunta', $parecidas[0], "No se encontró el formato esperado" );
        $this->assertNotEqual( $parecidas[0]['Pregunta']['id_pregunta'], $id_pregunta, "No se puede poner como parecida una pregunta igual a la original" );
        $this->assertEqual( $this->Pregunta->getSimilares( $id_categoria ), false, "Si falta un parametro debe devolver falso" );
        $this->assertEqual( $this->Pregunta->getSimilares( 0 ), false, "Si un paremetro es incorrecto debe devolver falso" );

    }

    public function testBuscar() {
        $this->assertEqual( count( $this->Pregunta->buscar( '' ) ), 0, "Resultados de busqueda vacíos debe devolver vacio" );
        $this->assertGreaterThan( 0, count( $this->Pregunta->buscar( 'lorem' ) ), "Resultados de busqueda de Lorem deben de ser > 0" );
        $this->assertGreaterThan( 0, count( $this->Pregunta->buscar( 'amet,' ) ), "Resultados de busqueda de amet, deben de ser > 0" );
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
