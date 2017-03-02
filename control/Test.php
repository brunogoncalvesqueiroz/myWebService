<?php

require_once __DIR__.'../../dao/DaoTest.php';

class Test {
    
    private $daoTest;
    
    public function get_test(){
        $this->daoTest = new DaoTest();
        return $this->daoTest->listarResult();
    }
}