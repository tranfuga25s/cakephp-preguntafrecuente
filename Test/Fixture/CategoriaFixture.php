<?php
/**
 * CategoriaFixture
 *
 */
class CategoriaFixture extends CakeTestFixture {

    public $import = array( 'model' => 'PreguntaFrecuente.Categoria' );
    
    public $records = array(
        array(
            'id_categoria' => 1,
            'nombre' => 'Categoria',
	    'parent_id' => null,
	    'lft' => 1,
	    'rght' => 2,
	    'publicada' => true,
	    'descripcion' => 'Descripción un poco más larga'
        )
    );
    
}
