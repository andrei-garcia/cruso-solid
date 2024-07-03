<?php

namespace App;


class Triangulo{

    private $largura;
    private $altura;

    public function getAltura() : float{
        return $this->altura;
    }

    public function setAltura(float $altura){
        $this->altura = $altura;
    }

    public function getLargura() : float{
        return $this->largura;
    }

    public function setLargura(float $largura){
        $this->largura = $largura;
    }
}