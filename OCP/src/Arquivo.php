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

    public function lerArquivoCSV() {

        $handle = fopen($this->caminho, 'r');
        
        $data = [];
        
        while (($line = fgetcsv($handle, 1000000, ";")) !== FALSE) {
            $data[] = $line;
        }

        return $data;
    }

    public function lerArquivoTXT() {

        $handle = fopen($this->caminho, 'r');
        
        $data = [];
        
        while (($line = fgets($handle)) !== FALSE) {
            $data[] = $line;
        }

        return $data;
    }
}