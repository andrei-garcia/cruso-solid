<?php

echo 'Projeto COM OCP - OPEN CLOSES PRINCIPLE: <BR/>';

require_once __DIR__ . '/vendor/autoload.php';

use \App\Leitor;

echo 'Dados do arquivo CSV: <br/> <br/>';
$leitor = new Leitor(
    'C:\curso-solid\OCP', 
    'dados.csv'
);

echo 'Caminho: ' . $leitor->getCaminho() . '<br/>';
echo 'Arquivo: ' . $leitor->getArquivo() . '<br/>';

echo 'Dados do arquivo: <br/> <br/>';
$data = $leitor->lerArquivo();
print_r($data);


echo ' <br/><br/>Dados do arquivo txt:<br/>';
$leitor = new Leitor(
    'C:\curso-solid\OCP', 
    'dados.txt'
);

echo 'Caminho: ' . $leitor->getCaminho() . '<br/>';
echo 'Arquivo: ' . $leitor->getArquivo() . '<br/>';

echo 'Dados do arquivo: <br/><br/>';
$data = $leitor->lerArquivo();
print_r($data);