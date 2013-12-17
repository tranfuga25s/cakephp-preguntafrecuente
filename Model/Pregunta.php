<?php
App::uses('PreguntaFrecuenteAppModel', 'PreguntaFrecuente.Model');
/**
 * Preguntum Model
 *
 * @property Categoria $Categoria
 */
class Pregunta extends PreguntaFrecuenteAppModel {

    /**
     * Primary key field
     *
     * @var string
     */
	public $primaryKey = 'id_pregunta';

    /**
     * Display field
     *
     * @var string
     */
	public $displayField = 'pregunta';
    
    /**
     * Nombre de la tabla
     * 
     * @var string
     */
     public $useTable = 'pregunta';

    /**
     * Reglas de validacion
     *
     * @var array
     */
	public $validate = array(
		'id_pregunta' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pregunta' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'respuesta' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'publicado' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'categoria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'leido' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'util' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

    /**
     * belongsTo associations
     *
     * @var array
     */
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'PreguntaFrecuente.Categoria',
			'foreignKey' => 'categoria_id'
		)
	);
    
    public function masLeido() {
        return $this->find( 'all', array( 'order' => array( 'leido' => 'desc' ),
                                          'limit' => 3,
                                          'fields' => array( 'id_pregunta', 'pregunta', 'leido', 'util' ),
                                          'recursive' => -1
        ));
    }
    
    public function masUtil() {
        return $this->find( 'all', array( 'order' => array( 'util' => 'desc' ),
                                          'limit' => 3,
                                          'fields' => array( 'id_pregunta', 'pregunta', 'leido', 'util' ),
                                          'recursive' => -1
        ));
    }
}
