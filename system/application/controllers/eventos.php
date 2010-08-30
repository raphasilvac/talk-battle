<?php

class Eventos extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "Eventos!";
    }

    public function add() {
        echo "Adicionando Evento...";
    }

    public function delete() {
        echo "Deletando Evento...";
    }

    public function edit() {
        echo "Editando Evento...";
    }

}