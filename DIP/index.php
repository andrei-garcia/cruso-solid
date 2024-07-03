<?php

require_once __DIR__ . '/vendor/autoload.php';

echo 'APLICANDO DIP: DEPENDENCY INVERSION PRINCIPAL <BR/>';

use \App\Email;
use \App\Sms;
use \App\Mensagem;

$email = new Email();
$sms = new Sms();

echo '<br/><br/> Memsagem em email <br/><br/>';
$mensagem = new Mensagem($email);
$mensagem->enviar('Olá, mundo!');

echo '<br/><br/> Memsagem em sms <br/><br/>';

$mensagem = new Mensagem($sms);
$mensagem->enviar('Olá, mundo!');

