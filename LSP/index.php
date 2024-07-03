<?php

require_once __DIR__ . '/vendor/autoload.php';

echo 'APLICANDO LSP - LISKOV SUBSTITUTION PRINCIPLE: <BR/>';

use \App\Quadrado;
use \App\Triangulo;
use \App\Poligono;

$quadrado = new Quadrado();
$quadrado->setAltura(10);

$poligono = new Poligono($quadrado);
echo 'Área do quadrado: ' . $poligono->calculaArea() . '<br/>';

$triangulo = new Triangulo();
$triangulo->setAltura(10);
$triangulo->setLargura(5);

$poligono = new Poligono($triangulo);
echo 'Área do triângulo: ' . $poligono->calculaArea() . '<br/>';