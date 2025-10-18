<?php

//quando a classe é final, ela não pode ser herdada
final class ContaPoupanca extends Conta
{

    public function retirar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
        } else {
            return false;
        }
        return true;
    }
}
