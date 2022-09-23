<?php

class Vertice{
    private $rotulo = '';
    private $grau = 0;

    function __construct($rotulo)
    {
        if($rotulo !== '')
            $this->rotulo = $rotulo;
    }

    function getRotulo(){
        return $this->rotulo;
    }

}



?>