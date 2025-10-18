<?php

require_once "classes/Conta.php";
require_once "classes/ContaCorrente.php";
require_once "classes/ContaPoupanca.php";

$contaPoupanca = new ContaPoupanca(123, 456, 1000);

echo "{$contaPoupanca->getSaldo()} <br>";
$contaPoupanca->depositar(500);
echo "{$contaPoupanca->getSaldo()} <br>";
$contaPoupanca->retirar(1400);
echo "{$contaPoupanca->getSaldo()} <br>";

/*
    echo "<pre>";
    // var_dump($contaPoupanca);
    print_r($contaPoupanca);
    echo "</pre>";
*/