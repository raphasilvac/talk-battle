<?php

class Batalhas extends My_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
		$this->load->model('palestra');
		if(!$this->session->userdata('data')) {
			$palestras = $this->palestra->getData()->result();
			$this->session->set_userdata(array('data' => $palestras));
		}
		$dados = $this->session->userdata('data');
		$lenght = count($this->session->userdata('data')) - 1;
		$palestra1	= rand(0, $lenght);
		$palestra2  = rand(0, $lenght);

		while($palestra1 == $palestra2) {
			$palestra2 = rand(0, $lenght);
		}
		
		$this->data['palestra1'] = $dados[$palestra1];
		$this->data['palestra2'] = $dados[$palestra2];
        $this->layout->view('batalhas', $this->data);
    }

    public function add() {
        $this->load->model('batalha');
        $batalhas = $this->batalha->getBatalhas()->result();

        echo "<pre>";
        print_r($batalhas);

        $this->load->view('batalhas');
        $this->output->enable_profiler();
    }

    public function delete() {
        echo "Deletando Batalha...";
    }

    public function edit() {
        echo "Editando Batalha...";
    }

}