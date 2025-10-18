<?php
//FUNÇÕES PHP

function calcula_imc(float $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

//CHAMADA DE FUNÇÃO
// echo calcula_imc(62, 1.70);

/*
    $total = 0;
    function km2milha(float $km): float
    {
        global $total;
        $total += $km;
        return $km * 0.6;
    }

    echo km2milha(100) . "<br>";
    echo km2milha(100) . "<br>";
    echo km2milha(100) . "<br>";

    var_dump($total) .  "<br>";
*/

/*
    function percorre($km)
    {
        static $total;
        $total += $km;
        return "Percorreu mais {$km} km, totalizando {$total} km.<br>";
    }


    print percorre(100);
    print percorre(200);
    print percorre(300);
    print percorre(100);
*/


/*
//PASSAGEM DE PARÂMETROS POR VALOR
    function incrementa($variavel, $valor)
    {
        $variavel += $valor;
    }

    $teste = 100;
    incrementa($teste, 20);

    var_dump($teste); // 100, pois a variável $teste não foi alterada dentro da função  
*/

/*
//PASSAGEM DE PARÂMETROS POR REFERÊNCIA
// Para passar por referência, usamos o símbolo & antes do nome do parâmetro na função
// objetos são passados por referência por padrão, então não é necessário o símbolo & para eles.
    function incrementa(&$variavel, $valor)
    {
        $variavel += $valor;
    }

    $teste = 100;
    incrementa($teste, 20); // Agora $teste será 120, pois foi passado por referência
    var_dump($teste); // 120, pois a variável $teste foi alterada dentro da função
*/


/*
//funcoes que trabalham com referência
    $lista =  ['a', 'c', 'b'];

    sort($lista); // Ordena a lista em ordem alfabética
    var_dump($lista); // ['a', 'b', 'c']
*/

//funcoes anônimas
$remove_acento = function ($str) {
    return str_replace(
        ['á', 'é', 'í', 'ó', 'ú', 'ã', 'õ', 'ç'],
        ['a', 'e', 'i', 'o', 'u', 'a', 'o', 'c'],
        $str
    );
};

// var_dump($remove_acento('Olá, você está bem?') . "<br>");
// var_dump($remove_acento('bábébíbóbú') . "<br>");

function definir_maisculo($palavra, $funcao)
{
    $palavra = $funcao($palavra);
    return strtoupper($palavra);
}


var_dump(definir_maisculo('bábébíbóbú', $remove_acento));
