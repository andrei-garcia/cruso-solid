<?php

namespace App;

class Poligono
{
    
    private $forma;

    public function __construct(object $forma)
    {
        $this->forma = $forma;
    }

    public function calculaArea() : float
    {
        return $this->forma->getAltura() * $this->forma->getLargura();
    }

}