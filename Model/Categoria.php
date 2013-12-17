<?php
App::uses('PreguntaFrecuenteAppModel', 'PreguntaFrecuente.Model');
/**
 * Categoria Model
 *
 * @property Padre $Padre
 * @property Preguntum $Preguntum
 */
class Categoria extends PreguntaFrecuenteAppModel {

    /**
     * Primary key field
     *
     * @var string
     */
	public $primaryKey = 'id_categoria';

    /**
     * Display field
     *
     * @var string
     */
	public $displayField = 'nombre';
    
    
    public $actsAs = array( 'Tree' );

    /**
     * hasMany associations
     *
     * @var array
     */
	public $hasMany = array(
		'Preguntum' => array(
			'className' => 'Pregunta',
			'foreignKey' => 'categoria_id',
			'dependent' => false
		)
	);

}
