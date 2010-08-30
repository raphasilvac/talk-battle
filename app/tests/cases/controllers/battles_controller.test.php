<?php
/* Battles Test cases generated on: 2010-08-30 03:08:28 : 1283151508*/
App::import('Controller', 'Battles');

class TestBattlesController extends BattlesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BattlesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.battle');

	function startTest() {
		$this->Battles =& new TestBattlesController();
		$this->Battles->constructClasses();
	}

	function endTest() {
		unset($this->Battles);
		ClassRegistry::flush();
	}

}
?>