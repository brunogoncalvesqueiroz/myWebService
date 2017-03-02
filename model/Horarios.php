<?php

/**
 * Description of Horarios
 *
 * @author bruno.queiroz
 */
class Horarios {
    //put your code here
    
    public $id_horario;
    public $horario;
    
    function getId_horario() {
        return $this->id_horario;
    }

    function getHorario() {
        return $this->horario;
    }

    function setId_horario($id_horario) {
        $this->id_horario = $id_horario;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }
    
}
