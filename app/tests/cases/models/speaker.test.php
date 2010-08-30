<?php
/* Speaker Test cases generated on: 2010-08-30 03:08:07 : 1283151487*/
App::import('Model', 'Speaker');

class SpeakerTestCase extends CakeTestCase {
	var $fixtures = array('app.speaker');

	function startTest() {
		$this->Speaker =& ClassRegistry::init('Speaker');
	}

	function endTest() {
		unset($this->Speaker);
		ClassRegistry::flush();
	}

}
?>