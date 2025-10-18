<?php
require_once "Conta.php";


//vai gerar um erro, pois a classe ContaSalario não implementa o método abstrato retirar
class ContaSalario extends Conta
{
    /*
    //com o método implementado, não gera mais erro
    public function retirar($valor)
    {
        //
    }
 */
}
