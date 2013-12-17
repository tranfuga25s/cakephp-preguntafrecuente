<?php
App::uses('Categoria', 'PreguntaFrecuente.Model');

/**
 * Categoria Test Case
 *
 */
class CategoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.pregunta_frecuente.categoria',
		'plugin.pregunta_frecuente.padre',
		'plugin.pregunta_frecuente.pregunta'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Categoria = ClassRegistry::init('PreguntaFrecuente.Categoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Categoria);

		parent::tearDown();
	}

}
