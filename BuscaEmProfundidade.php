<?php

include("Grafo.php");

class BuscaEmProfundidade{ 

    function Buscar(Grafo $grafo, $origem, $destino){
        
        $roloDeBarbante = [];
        $verticesVisitados = [[],[]];
        $caminho = new Caminho;


        $roloDeBarbante[] = $origem;

        while($roloDeBarbante){
            
            $v = array_pop($roloDeBarbante);    
            
            if($v === "destino") break;

            foreach($grafo->getAdjacencias($v) as $u){
                $rotulo = $u->getRotulo();

                if(in_array($verticesVisitados,$rotulo)){
                    $verticesVisitados[] = $rotulo;
                    $caminho->Ligar($rotulo,$v);
                    $roloDeBarbante[] = $rotulo;
                }
            }
        }

        return $caminho->Gerar($origem, $destino);
    }
}


?>