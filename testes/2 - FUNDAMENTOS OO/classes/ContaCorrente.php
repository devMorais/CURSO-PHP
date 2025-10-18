<?php
class ContaCorrente extends Conta
{
    protected $limite;

    public  function __construct($agencia, $conta, $saldo, $limite)
    {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    //quando o método é final, ele não pode ser sobrescrito nas classes filhasF
    public final function retirar($valor)
    {
        if (($this->saldo + $this->limite) >= $valor) {
            $this->saldo -= $valor;
        } else {
            return false;
        }
        return true;
    }
}
