<?php

class My_Controller extends Controller {

    var $layout = 'layout';
	var $data 	= array();
    public function __construct() {
        parent::Controller();
    }

	public function set_content_for_layout($view) {
		$this->data['content_for_layout'] = $this->load->view($view,'',true);
	} 
}