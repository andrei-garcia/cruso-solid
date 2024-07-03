<?php

namespace Admin\CursoSolid;

class Pedido
{

    private CarrinhoCompras $carrinhoCompras;
    private string $status;

    public function __construct(CarrinhoCompras $carrinhoCompras)
    {
        $this->carrinhoCompras = $carrinhoCompras;
        $this->status = 'aberto';
    }

    public function getCarrinho() : CarrinhoCompras
    {
        return $this->carrinhoCompras;
    }

    public function adicionarItem(Item $item) : bool
    {
        $this->carrinhoCompras->adicionarItem($item);
        return true;
    }

    public function exibirValorTotal() : float
    {
        return $this->carrinhoCompras->getValorTotal();
    }

    public function exibirStatus() : string
    {
        return $this->status;
    }

    public function confirmarPedido() : bool
    {

        if ($this->carrinhoCompras->validarCarrinho()) {
            $this->status = 'confirmado';
            return true;
        }

        return false;
    }
}