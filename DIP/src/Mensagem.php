<?php

namespace App;

use App\IMensagem;

class Mensagem {

    private $canal;

    public function __construct(IMensagem $canal)
    {
        $this->canal = $canal;
    }

    public function enviar(string $mensagem)
    {
        $this->canal->enviar($mensagem);
    }
    

}