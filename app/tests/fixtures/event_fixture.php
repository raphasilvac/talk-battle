<?php
/* Event Fixture generated on: 2010-08-30 03:08:59 : 1283151479 */
class EventFixture extends CakeTestFixture {
	var $name = 'Event';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'primary'),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2010-08-30 03:57:59',
			'updated' => '2010-08-30 03:57:59'
		),
	);
}
?>