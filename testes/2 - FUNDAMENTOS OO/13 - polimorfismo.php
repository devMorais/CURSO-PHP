<?php

require_once "classes/Conta.php";
require_once "classes/ContaCorrente.php";
require_once "classes/ContaPoupanca.php";


$contas = [];
$contas[]  = new ContaCorrente(5606, 'CC-16321', 60000, 3000);
$contas[]  = new ContaPoupanca(2314, 'CP-27314', 3000);

foreach ($contas as $conta) {
    if ($conta instanceof Conta) {
        echo  "<u>{$conta->getInfo()}</u> <br>";
        echo  "<b> -- Saldo Atual:</b> <i>R$ {$conta->getSaldo()}</i> <br>";
        $conta->depositar(333);
        echo  "-- Depósito de R$ 333,00 <br>";
        echo  "<b> -- Saldo Atual:</b> <i>R$ {$conta->getSaldo()}</i> <br>";

        if ($conta->retirar(4000)) {
            echo  "-- Retirada de R$ 4000,00 <br>";
        } else {
            echo  "-- <span style='color:red;'>Saldo insuficiente para retirada de R$ 4000,00</span> <br>";
        }

        echo  "<b> -- Saldo Atual:</b> <i>R$ {$conta->getSaldo()}</i> <br>";
    }
}



/*
    echo "<pre>";
    var_dump($contas);
    echo "</pre>";
*/