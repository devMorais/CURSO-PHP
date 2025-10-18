<?php

require_once "classes/Conta.php";
require_once "classes/ContaPoupanca.php";


class ContaEspecial extends ContaPoupanca
{
    // vai gerar um erro, pois a classe ContaPoupanca é final
}
