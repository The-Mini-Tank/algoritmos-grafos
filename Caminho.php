<?php

class Caminho {
    public $teste = "olá";
    private static $caminho = [[],[]];
    
    public function __construct()
    {
        self::$caminho = [[],[]];
    }

    public function Ligar($anterior = '', $proximo = ''){
        self::$caminho = [$anterior, $proximo];
    }

    public function Gerar($origem = '', $destino = ''){
        $resultado = [];
        $dt = $destino;
        
        while($dt !== $origem and array_key_exists($dt, self::$caminho)){
            $resultado[] = $dt;
            $dt = array_search($dt, self::$caminho);
        }

        $resultado[] = $dt;
        array_reverse($resultado);

        return $resultado;
    }
}

?> 
