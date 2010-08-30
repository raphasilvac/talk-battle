<?php
/* Battle Fixture generated on: 2010-08-30 03:08:17 : 1283151437 */
class BattleFixture extends CakeTestFixture {
	var $name = 'Battle';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'left' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'right' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'winner' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'left' => 1,
			'right' => 1,
			'winner' => 1,
			'created' => '2010-08-30 03:57:17',
			'updated' => '2010-08-30 03:57:17'
		),
	);
}
?>