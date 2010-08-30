<?php

class palestra extends Model {

    public function Palestra() {
        parent::Model();
    }

	public function getData(){
		return $this->db->get('palestras');
	}

}