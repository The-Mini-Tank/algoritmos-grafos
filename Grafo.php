<?php

class Grafo{

    private  $qtdMaximaVertices = 0;
    private $qtdAtualVertices = 0;
    private $rotulosEmIndices = [[],[]];
    private $vertices = [];

    function __construct($qtdVertices)
    {
        $this->qtdMaximaVertices = $qtdVertices;
    }

    function adicionarVertice($rotulo){
        if($this->qtdAtualVertices < $this->qtdMaximaVertices){
            $novoVertice = new Vertice($rotulo);
            $this->vertices[] = $novoVertice;
            $rotulosEmIndices[] = [[$rotulo],[$this->qtdAtualVertices]];
            $this->qtdAtualVertices++;
        }
    }

    function getVertices(){
        return $this->vertices;
    }

}



?>