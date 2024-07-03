<?php

namespace App\dao;

use App\interfaces\ICadastro;
use App\interfaces\ILog;

class LeadModel implements ICadastro, ILog {

    public function cadastrar() : string
    {
        return "Cadastrando lead";
    }

    public function atualizar() : string
    {
        return "Atualizando lead";
    }

    public function deletar() : string
    {
        return "Deletando lead";
    }

    public function log(string $msg)
    {
        return "Logando mensagem: " . $msg;
    }

}