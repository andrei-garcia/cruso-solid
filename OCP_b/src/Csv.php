<?php

namespace App;

class Csv extends Arquivo {
    
    public function lerArquivo() {
        $handle = fopen($this->getCaminho(), 'r');
        
        $data = [];
        
        while (($line = fgetcsv($handle, 1000000, ";")) !== FALSE) {
            $data[] = $line;
        }

        return $data;
    }
}