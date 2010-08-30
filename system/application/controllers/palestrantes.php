<?php

class Palestrantes extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "Palestrantes!";
    }

	public function get() {
		$this->db->get('palestrantes')
	}

    public function add() {
        echo "Adicionando Palestrante...";
    }

    public function delete() {
        echo "Adicionando Palestrante...";
    }

    public function edit() {
        echo "Adicionando Palestrante...";
    }

}