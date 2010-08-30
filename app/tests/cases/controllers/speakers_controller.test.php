<?php
/* Speakers Test cases generated on: 2010-08-30 03:08:38 : 1283151518*/
App::import('Controller', 'Speakers');

class TestSpeakersController extends SpeakersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SpeakersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.speaker');

	function startTest() {
		$this->Speakers =& new TestSpeakersController();
		$this->Speakers->constructClasses();
	}

	function endTest() {
		unset($this->Speakers);
		ClassRegistry::flush();
	}

}
?>