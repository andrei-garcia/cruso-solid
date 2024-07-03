<?php

namespace App;

use App\Arquivo;

class Leitor {

    private string $caminho;
    private string $arquivo;

    public function __construct(string $caminho, string $arquivo) {
        $this->caminho = $caminho;
        $this->arquivo = $arquivo;
    }

    public function getCaminho() : string {
        return $this->caminho;
    }

    public function getArquivo() : string {
        return $this->arquivo;
    }   

    public function setCaminho(string $caminho) {
        $this->caminho = $caminho;
    }

    public function setArquivo(string $arquivo) {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo() : array {
        
        $extensao = ucfirst(pathinfo($this->arquivo, PATHINFO_EXTENSION));

        $class = "App\\" . $extensao;

        return call_user_func(
            array(new $class($this->caminho.'/'.$this->arquivo), 
            'lerArquivo'
        ));
       
    }


}