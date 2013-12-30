<?php
/**
 * Clase para ejecutar todos los test de modelos
 */
class ControllerTests extends PHPUnit_Framework_TestSuite {

    /**
     * Suite define the tests for this suite
     *
     * @return $suite
     */
    public static function suite() {
        $suite = new PHPUnit_Framework_TestSuite('All Model Tests');
        $path = ROOT. DS . APP_DIR . DS . 'Plugin' . DS . 'PreguntaFrecuente'. DS . 'Test'. DS. 'Case'. DS . 'Controller'. DS;
        $suite->addTestFile( $path.'PreguntaFrecuenteControllerTest.php' );
        //$suite->addTestFile( $path.'PreguntaTest.php' );
        return $suite;
    }
}
