<?php
/* Talks Test cases generated on: 2010-08-30 03:08:44 : 1283151524*/
App::import('Controller', 'Talks');

class TestTalksController extends TalksController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TalksControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.talk');

	function startTest() {
		$this->Talks =& new TestTalksController();
		$this->Talks->constructClasses();
	}

	function endTest() {
		unset($this->Talks);
		ClassRegistry::flush();
	}

}
?>