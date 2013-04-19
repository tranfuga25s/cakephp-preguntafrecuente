<?php
App::uses('PreguntaFrecuente', 'PreguntaFrecuente.Model');

/**
 * PreguntaFrecuente Test Case
 *
 */
class PreguntaFrecuenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'q'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PreguntaFrecuente = ClassRegistry::init('PreguntaFrecuente.PreguntaFrecuente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PreguntaFrecuente);

		parent::tearDown();
	}

}
