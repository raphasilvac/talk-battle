<?php
/* Battle Test cases generated on: 2010-08-30 03:08:17 : 1283151437*/
App::import('Model', 'Battle');

class BattleTestCase extends CakeTestCase {
	var $fixtures = array('app.battle');

	function startTest() {
		$this->Battle =& ClassRegistry::init('Battle');
	}

	function endTest() {
		unset($this->Battle);
		ClassRegistry::flush();
	}

}
?>