<?php
// $valor = 100;

/*
    // $valor = $valor + 100;
    // $valor++;
    // $valor += 5;
    // $valor -= 5;
    // $valor *= 5;
    // $valor /= 5;

    $teste = $valor++; //dessa forma o valor de $teste será 100, pois o operador ++ incrementa $valor após atribuição
    $teste = ++$valor; //dessa forma o valor de $teste será 102, pois o operador ++ incrementa $valor antes da atribuição
    var_dump($valor); //101
    var_dump($teste); //100
*/

/*
    $a = 2;
    $b = 4;

    // A ordem de precedência dos operadores é importante.
    // A multiplicação (*) tem precedência sobre a adição (+), então 3 * 4 e 5 * b serão calculados primeiro.
    echo $a + 3 * 4 + 5 * $b; // Resultado: 2 + 12 + 20 = 34
*/

// $valor1 = 100;
// $valor2 = '100';

// // if ($valor1 == $valor2) {
// //     echo 'é sim';
// // }

// if ($valor1 === $valor2) {
//     echo 'é sim';
// }


//operadores logicos 

$salario = 1000;
$cargo = 'Gerente';

// if ($salario > 800 and $cargo == 'Gerente') {
//     echo 'ok';
// }

if ($salario > 800 && $cargo == 'Gerente') {
    echo 'ok';
}
