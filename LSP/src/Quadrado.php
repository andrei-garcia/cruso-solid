<?php

namespace App;

class Quadrado {

    private $altura;
    private $largura;

    public function getAltura() : float {
        return $this->altura;
    }

    public function setAltura(float $altura) {
        $this->largura = $altura;
        $this->altura = $altura;
    }

    public function getLargura()  : float {
        return $this->largura;
    }

    public function setLargura(float $largura) {
        $this->largura = $largura;
        $this->altura = $largura;
    }
}