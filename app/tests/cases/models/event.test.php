<?php
/* Event Test cases generated on: 2010-08-30 03:08:59 : 1283151479*/
App::import('Model', 'Event');

class EventTestCase extends CakeTestCase {
	var $fixtures = array('app.event');

	function startTest() {
		$this->Event =& ClassRegistry::init('Event');
	}

	function endTest() {
		unset($this->Event);
		ClassRegistry::flush();
	}

}
?>