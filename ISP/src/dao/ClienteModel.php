<?php

namespace App\dao;

use App\interfaces\ICadastro;

class ClienteModel implements ICadastro {

    public function cadastrar() : string
    {
        return "Cadastrando cliente";
    }

    public function atualizar() : string
    {
        return "Atualizando cliente";
    }

    public function deletar() : string
    {
        return "Deletando cliente";
    }

}