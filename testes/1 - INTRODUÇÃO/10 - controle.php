<?php
//ESTRUTURAS DE CONTROLES PHP

//CORPO DO IF

/*
    if(){
        //
    }else{
        //
    }
*/

/*
    $salario = 1100;
    $tempo  = 12;


    // if ($salario < 1000) {

    //     if ($tempo >= 12) {
    //         echo "Você tem direito a um aumento de 10%";
    //     }
    // }

    //mesma coisa que o código comentado acima, mas com uma estrutura mais simples
    // if (($salario < 1000) and ($tempo >= 12)) {
    //     echo "Você tem direito a um aumento de 10%";
    // }

    //outra forma de escrever a mesma coisa
    if (($salario < 1000) && ($tempo >= 12)) {
        echo "Você tem direito a um aumento de 10%";
    } else {
        echo "Você não tem direito a um aumento de 10%";
    }
*/

//$valor_venda = 1000;

/*
    if ($valor_venda > 100) {
        $resultado = "Muito caro";
    } else {
        $resultado = "Preço justo";
    }

    var_dump($resultado);
*/

/*
//outra forma de escrever a mesma coisa ternária
//condição ? valor se verdadeiro : valor se falso
$resultado = ($valor_venda > 100) ? "Muito caro" : "Preço justo";
var_dump($resultado);

*/

/*
    $cont = 1;

    while ($cont <= 5) {
        print $cont . '';
        $cont++;
    }
*/

/*
    //primeiro argumnto: inicializa a variavel;
    //segundo argumento: condição de parada;
    //terceiro argumento: incremento da variável
    for ($cont = 1; $cont <= 10; $cont++) {
        print $cont . ' ';
    }
*/

// $tipo  = 'DOCs';

/*
    switch ($tipo) {
        case 'PDF':
            print "Você escolheu o tipo PDF";
            break;
        case 'DOC':
            print "Você escolheu o tipo DOC";
            break;
        case 'XLS':
            print "Você escolheu o tipo XLS";
            break;
        default:
            print "Tipo de arquivo não suportado";
            break;
    }
*/


/*
    //outra forma de escrever a mesma coisa, mas com if e elseif
    //não é necessário o uso do break, pois não há mais casos a serem verificados após
    if ($tipo == 'PDF') {
        print "Você escolheu o tipo PDF";
    } elseif ($tipo == 'DOC') {
        print "Você escolheu o tipo DOC";
    } elseif ($tipo == 'XLS') {
        print "Você escolheu o tipo XLS";
    } else {
        print "Tipo de arquivo não suportado";
    }
*/

$lista = ['PDF', 'DOC', 'XLS', 'TXT'];

foreach ($lista as $item) {
    print "O item da lista é: $item <br>";
}
