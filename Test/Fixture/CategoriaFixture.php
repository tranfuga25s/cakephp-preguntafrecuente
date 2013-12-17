<?php
/**
 * CategoriaFixture
 *
 */
class CategoriaFixture extends CakeTestFixture {

    public $table = 'test_categorias';
    /**
     * Fields
     *
     * @var array
     */
	public $fields = array(
		'id_categoria' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nombre' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'padre_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'publicada' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'descripcion' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_categoria', 'unique' => 1)
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
			'id_categoria' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'padre_id' => 1,
			'publicada' => 1,
			'descripcion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2013-12-17 09:54:32',
			'modified' => '2013-12-17 09:54:32'
		),
	);

}
