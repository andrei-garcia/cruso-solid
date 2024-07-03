<?php

namespace App;

class Email implements IMensagem
{
    public function enviar(string $mensagem)
    {
        echo "Email enviado: $mensagem";
    }
}