<?php

namespace App;

class Sms implements IMensagem
{
    public function enviar(string $mensagem)
    {
        echo "SMS enviado: $mensagem";
    }
}