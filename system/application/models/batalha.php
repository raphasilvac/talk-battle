<?php

class batalha extends Model {

    var $table = 'batalhas';

    public function Batalha() {
        parent::Model();
    }

    public function getbatalha($id) {
        $this->db->from($this->table);
        $this->db->where(array('id' => $id));
        return $this->db->get();
    }

    public function getBatalhas() {
        $this->db->from($this->table);
        return $this->db->get();
    }

}