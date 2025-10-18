<?php

require_once "Conta.php";
require_once "ContaCorrente.php";


class ContaCorrenteEspecial extends ContaCorrente
{
    //erro, não pode sobrescrever um método final
    public function retirar($valor)
    {
        //
    }
}
