<?php

require_once __DIR__.'../dao/DaoProjectBomb.php';

class ControleProjectBomb {
    
    private $daoProjectBomb;
    
    public function get_Horarios(){
        $this->daoProjectBomb = new DaoProjectBomb();
        return $this->daoProjectBomb->listarResult();
    }
}