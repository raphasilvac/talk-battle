<?php
/* Talk Test cases generated on: 2010-08-30 03:08:15 : 1283151495*/
App::import('Model', 'Talk');

class TalkTestCase extends CakeTestCase {
	var $fixtures = array('app.talk');

	function startTest() {
		$this->Talk =& ClassRegistry::init('Talk');
	}

	function endTest() {
		unset($this->Talk);
		ClassRegistry::flush();
	}

}
?>