<?php


class BattlesController extends AppController
{
    public $name = "Battles";
    public $uses = array("Battle", "Talk");
    public $scaffold;
    
    
    public function index()
    {
        $talks = $this->Talk->find("all");
        
        $leftKey = array_rand($talks);
        
        do {
            $rightKey = array_rand($talks);
        }
        while($leftKey == $rightKey);
        
        $this->set("leftTalk", $talks[$leftKey]);
        $this->set("rightTalk", $talks[$rightKey]);

        $this->set("title_for_layout", "Talk Battle - A Batalha das Palestras");
        
        $this->layout = "main";
    }
}
