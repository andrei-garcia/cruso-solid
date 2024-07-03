<?php

namespace Admin\CursoSolid;

class Item

{
    private float $valor;
    private string $descricao;

    public function __construct(string $descricao = '', float $valor = 0.0)
    {
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    public function getValor() : float
    {
        return $this->valor;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function itemValido() : bool
    {
        return $this->valor > 0 && $this->descricao != '';
    }

}