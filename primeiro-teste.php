<?php

require 'src/Conta.php';

$conta = new Conta();

$conta->nomeTitular = "Di";
$conta->cpfTitular = "444.444.444-33";
$conta->saldo = 500;

$conta->sacar(200);

echo "Saldo da conta {$conta->saldo}";
