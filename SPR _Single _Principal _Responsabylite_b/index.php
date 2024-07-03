<?php

require_once __DIR__ . '/vendor/autoload.php';

use \Admin\CursoSolid\CarrinhoCompras;
use \Admin\CursoSolid\Pedido;
use \Admin\CursoSolid\Item;
use \Admin\CursoSolid\EmailService;

echo 'Projeto com SRP: <BR/>';

$carrinho = new CarrinhoCompras();
$pedido = new Pedido($carrinho);

$item1 = new Item('Bicicleta', 750.10);
$item2 = new Item('Geladeira', 1950.15);
$item3 = new Item('Tapete', 350.20);

//$pedido->adicionarItem($item1);
//$pedido->adicionarItem($item2);
$pedido->adicionarItem($item3);

echo " Carrinho de compra <br />";
$carrrinho = $pedido->getCarrinho();

print_r($carrrinho->getItens());

echo "<br />";
echo 'Valor total: '.$pedido->exibirValorTotal();
echo "<br />";
echo 'status: '.$pedido->exibirStatus();
echo "<br />";

if($pedido->confirmarPedido()) {
    echo 'Pedido realizado com sucesso!';
    echo "<br />";
    $emailService = new EmailService();
    $emailService->enviarEmailConfirmacao();
} else {
    echo "<br />";
    echo 'Erro na confirmação do pedido. Carrinho não possui itens';
    echo "<br />";
}

echo "<br />";
echo 'status: '.$pedido->exibirStatus();
echo "<br />";



