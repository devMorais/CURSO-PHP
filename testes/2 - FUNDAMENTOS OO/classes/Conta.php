<?php

//quando a classe é abstrata, ela não pode ser instanciada
abstract class Conta
{
    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo > 0) {
            $this->saldo = $saldo;
        }
    }

    public function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getInfo()
    {
        return "Agência: {$this->agencia} - Conta: {$this->conta} - Saldo: {$this->saldo}";
    }

    //método abstrato, obriga as classes filhas a implementarem esse método
    // é uma assinatura do método
    // é uma forma de garantir que todas as classes filhas terão esse método
    abstract public function retirar($valor);
}
