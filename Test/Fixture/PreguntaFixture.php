<?php
/**
 * PreguntaFixture
 *
 */
class PreguntaFixture extends CakeTestFixture {

    public $table = 'test_pregunta';
    /**
     * Fields
     *
     * @var array
     */
	public $fields = array(
		'id_pregunta' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'pregunta' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'respuesta' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'publicado' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'leido' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'util' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_pregunta', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_spanish_ci', 'engine' => 'InnoDB')
	);

    /**
     * Records
     *
     * @var array
     */
	public $records = array(
		array(
			'id_pregunta' => 1,
			'pregunta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'respuesta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2013-12-17 09:38:47',
			'modified' => '2013-12-17 09:38:47',
			'publicado' => 1,
			'categoria_id' => 1,
			'leido' => 2,
			'util' => 1
		),
		array(
            'id_pregunta' => 2,
            'pregunta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'respuesta' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'created' => '2013-12-17 09:40:47',
            'modified' => '2013-12-17 09:40:47',
            'publicado' => 1,
            'categoria_id' => 1,
            'leido' => 1,
            'util' => 2
        )
	);

}
