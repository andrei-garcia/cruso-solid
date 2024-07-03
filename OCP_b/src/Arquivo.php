<?php

namespace App;

class Arquivo{

    private string $caminho;

    public function __construct(string $caminho){
        $this->caminho = $caminho;
    }

    public function getCaminho() : string {
        return $this->caminho;
    }

    public function setCaminho(string $caminho) {
        $this->caminho = $caminho;
    }

}