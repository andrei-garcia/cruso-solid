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
        
        $extensao = pathinfo($this->arquivo, PATHINFO_EXTENSION);

        if($extensao == 'txt') {
            $arquivo = new Arquivo($this->caminho . '/' . $this->arquivo);
            $data = $arquivo->lerArquivoTXT();
            return $data;
        }

        if($extensao == 'csv') {
            $arquivo = new Arquivo($this->caminho . '/' . $this->arquivo);
            $data = $arquivo->lerArquivoCSV();
            return $data;
        }
       
    }


}