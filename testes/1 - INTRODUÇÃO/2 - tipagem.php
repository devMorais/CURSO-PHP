<?php

declare(strict_types=1); // Habilita o modo de tipagem estrita.

//### TIPAGEM EM PHP ###

/*
 * O PHP possui tipagem dinâmica, o que significa que o tipo de uma
 * variável é determinado pelo valor que ela contém.
 */
$codigo = 5;
$nome = 'teste';
// var_dump($codigo); // Mostra: int(5)
// var_dump($nome);   // Mostra: string(5) "teste"


/*
 * ### CONCATENAÇÃO VS. SOMA ###
 * O PHP diferencia o operador de concatenação (.) do operador de soma (+).
 * O contexto define se o PHP tentará converter os tipos (coerção de tipo).
 */

// O operador '.' trata ambos os operandos como strings.
var_dump('Nome ' . 'Sobrenome'); // Resultado esperado: string(14) "Nome Sobrenome"
var_dump('Nome ' . 5);           // O número 5 é convertido para string: string(6) "Nome 5"
var_dump(5 . 5);                 // Ambos os números são convertidos para string: string(2) "55"

// O operador '+' trata ambos os operandos como números.
var_dump(5.5);                   // Um número float: float(5.5)
var_dump(4 + 5);                 // Soma de dois inteiros: int(9)
var_dump(4 + '5');               // A string '5' é convertida para int: int(9)
var_dump('4' + '5');             // Ambas as strings são convertidas para int: int(9)


/*
 * ### FUNÇÕES COM TIPAGEM DINÂMICA ###
 * Sem especificar os tipos, o PHP faz a coerção automática para realizar os cálculos.
 */
function calcula_imc_dinamico($peso, $altura)
{
    // var_dump($peso, $altura);
    return $peso / ($altura * $altura);
}

// var_dump(calcula_imc_dinamico(75, 1.8));   // int(75) float(1.8) -> float(23.148148148148145)
// echo '<br>';
// A string '75' é convertida para um número para o cálculo.
// var_dump(calcula_imc_dinamico('75', 1.8)); // string(2) "75" float(1.8) -> float(23.148148148148145)


/*
 * ### FUNÇÕES COM TIPOS DE PARÂMETRO (TYPE HINTING) ###
 * Aqui, forçamos que os parâmetros sejam do tipo float.
 * No modo padrão (não estrito), o PHP tenta converter os valores passados.
 */
function calcula_imc_com_parametros(float $peso, float $altura)
{
    // var_dump($peso, $altura);
    return $peso / ($altura * $altura);
}

// O inteiro 75 é promovido para float(75).
// var_dump(calcula_imc_com_parametros(75, 1.8));      // float(75) float(1.8) -> float(23.148148148148145)
// echo '<br>';
// A string '75' é convertida para float(75).
// var_dump(calcula_imc_com_parametros('75', 1.8));    // float(75) float(1.8) -> float(23.148148148148145)
// echo '<br>';
// A string '1.8' é convertida para float(1.8).
// var_dump(calcula_imc_com_parametros('75', '1.8'));  // float(75) float(1.8) -> float(23.148148148148145)


/*
 * ### FUNÇÕES COM TIPOS ESTRITOS (STRICT_TYPES) ###
 * Com `declare(strict_types=1);` no topo do arquivo, o PHP para de fazer a coerção automática.
 * Os tipos passados para a função devem ser exatamente os esperados (ou um `int` pode ser passado para um parâmetro `float`).
 */

// Forçamos os parâmetros E o tipo de retorno para serem `float`.
function calcula_imc(float $peso, float $altura): float
{
    var_dump($peso, $altura);
    return $peso / ($altura * $altura);
}

// Chamada correta, com os tipos exatos.
var_dump(calcula_imc(75, 1.8)); // int(75) é aceito pois pode ser promovido para float.
echo '<br>';

// Chamada também correta.
var_dump(calcula_imc(75.5, 1.8)); // float(75.5) float(1.8) -> float(23.302469135802468)
echo '<br>';

// A linha abaixo causaria um "Fatal error: Uncaught TypeError".
// Com a tipagem estrita, o PHP não converte mais a string '75' para float automaticamente.
// var_dump(calcula_imc('75', 1.8));

// Para corrigir, devemos garantir que a variável tenha o tipo correto ANTES de chamar a função.
$peso = '75';
// Fazemos a conversão explícita (casting) da string para float.
var_dump(calcula_imc((float)$peso, 1.8)); // float(75) float(1.8) -> float(23.148148148148145)
