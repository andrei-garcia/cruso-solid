<?php

namespace App;


class Txt extends Arquivo {
    
    public function lerArquivo() {
        $handle = fopen($this->getCaminho(), 'r');
        
        $data = [];
        
        while (($line = fgets($handle)) !== FALSE) {
            $data[] = $line;
        }

        return $data;
    }
}