<?php

class Palestras extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "Palestras!";
    }

    public function add() {
        echo "Adicionando Palestra...";
    }

    public function delete() {
        echo "Deletando Palestra...";
    }

    public function edit() {
        echo "Editando Palestra...";
    }
}