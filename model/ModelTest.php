<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModelTest
 *
 * @author edilson.souza
 */
class ModelTest {
    //put your code here
    
    public $id;
    public $name;
    
    function getId() {
        return $this->nome;
    }

    function getName() {
        return $this->login;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }
    
}
