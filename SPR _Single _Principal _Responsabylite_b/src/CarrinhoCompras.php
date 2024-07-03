<?php

namespace Admin\CursoSolid;
use Admin\CursoSolid\Item;

class CarrinhoCompras
{
   //atributos
   private $itens;
   private $status;
   private $valorTotal;

   //métodos
   public function __construct() {
       $this->itens = [];
       $this->status = 'aberto';
       $this->valorTotal = 0;
   }

   public function getItens() {
       return $this->itens;
   }

   public function adicionarItem(Item $item) {

        if(!$item->itemValido()) {
            return false;
        }

        array_push($this->itens,$item);
        return true;
   }

   public function getValorTotal() {
       return $this->valorTotal;
   }

   public function getStatus() {
       return $this->status;
   }

   public function validarCarrinho() {
       return count($this->itens) > 0;
   }
   
}