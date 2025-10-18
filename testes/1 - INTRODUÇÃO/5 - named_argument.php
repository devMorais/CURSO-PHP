<?php

// function calcula_juros_simples(float $valor, float $periodo, float $taxa): float
// {
//     return $valor + $valor * $periodo * ($taxa / 100);
// }


//valor default 
function calcula_juros_simples(float $valor, float $periodo, float $taxa = 10): float
{
    return $valor + $valor * $periodo * ($taxa / 100);
}


//cuidado ao renomear os para

// function calcula_juros_simples(float $valor, float $periodo, float $taxax): float
// {
//     return $valor + $valor * $periodo * ($taxax / 100);
// }


// var_dump(calcula_juros_simples(100, 5, 10));
// var_dump(calcula_juros_simples(valor: 200, periodo: 5, taxa: 10));
// var_dump(calcula_juros_simples(taxa: 10,  valor: 200, periodo: 5));
//Fatal error: Uncaught Error: Unknown named parameter $taxa in C:\laragon\www\CURSO-PHP\testes\named_argument.php:19 Stack trace: #0 {main} thrown in C:\laragon\www\CURSO-PHP\testes\named_argument.php on line 19


$vetor = array_fill(start_index: 50, count: 50, value: 'Eu sou um vencedor');
// var_dump($vetor);

$texto = str_repeat(string: '.oOo.', times: 5);
// var_dump($texto);

var_dump(calcula_juros_simples(valor: 100, periodo: 5)); //usando named
var_dump(calcula_juros_simples(periodo: 5, valor: 100));  // invertendo as posições 
