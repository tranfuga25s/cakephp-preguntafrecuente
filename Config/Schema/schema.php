<?php 
class PreguntaFrecuenteSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	
	public $pregunta = array(
		'id_pregunta' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'pregunta' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'respuesta' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'publicado' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'leido' => array( 'type' => 'integer', 'null' => false, 'default' => 0 ),
		'util' => array( 'type' => 'integer', 'null' => false, 'default' => 0 ),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_pregunta', 'unique' => 1 )
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);
	
	public $comentarios = array(
		'id_comentario' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'pregunta_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'usuario' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'comentario' => array( 'type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8' ),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'aprobado' => array( 'type' => 'boolean', 'null' => false, 'default' => false ),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_comentario', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);
	public $categorias = array(
		'id_categoria' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombre' => array('type' => 'text', 'null' => false, 'default' => null ),
		'padre_id' => array( 'type' => 'integer', 'null' => false, 'default' => null),
		'publicada' => array('type' => 'boolean', 'null' => false, 'default' => false),
		'descripcion' => array('type' => 'text', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_categoria', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

}
