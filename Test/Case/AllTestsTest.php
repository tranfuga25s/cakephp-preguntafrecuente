<?php
/**
 * Clase para ejecutar todos los test
 */
class AllTests extends PHPUnit_Framework_TestSuite {

    /**
     * Suite define the tests for this suite
     *
     * @return $suite
     */
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('All Tests');
        $path = APP_DIR . DS . 'Plugin'. DS . 'PreguntaFrecuente' . DS . 'Test' . DS . 'Case' . DS;
        //$suite->addTestFile( $path.'Controller'.DS.'ControllersTest.php' );
        $suite->addTestFile( $path.'Model'.DS.'AllModelsTest.php' );
        //$suite->addTestFile( $path.'View'.DS.'AllViewsTest.php');
		return $suite;
	}
}
