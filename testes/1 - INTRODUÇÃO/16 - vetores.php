<?php
//manipulação de arrays em php


/*
//sintaxe original para declarar um vetor 
    $cores = array('azul', 'amarelo', 'verde', 'rosa');
    echo "<pre>";
    var_dump($cores);
    echo "</pre>";
    //acessando uma posição
    print $cores[0];
*/

/*
//maneira recente de declarar um vetor php 5 em diante
    $cores = ['azul', 'amarelo', 'verde', 'rosa'];
    echo "<pre>";
    var_dump($cores);
    echo "</pre>";
    print $cores[1];
*/

/*
//outras maneira de declarar um vetor, cria uma numeração de indices 0
    $cores  = [];
    $cores[] = 'Azul';
    $cores[] = 'Amarelo';
    $cores[] = 'Verde';
    $cores[] = 'Rosa';
    echo "<pre>";
    var_dump($cores);
    echo "</pre>";
    print $cores[1];
*/

/*
//outras maneira de declarar um vetor onde definimos a chave
    $cores  = [];
    $cores[61235] = 'Azul';
    $cores[45895] = 'Amarelo';
    $cores[45879] = 'Verde';
    $cores[12035] = 'Rosa';
    echo "<pre>";
    var_dump($cores);
    echo "</pre>";
    print $cores[61235];
*/


/*
//indices com nomes textuais
    $pessoa = [];
    $pessoa['nome'] = 'Maria';
    $pessoa['endereco'] = 'Rua da prosperidade';
    $pessoa['nascimento'] = '18-08-1992';
    $pessoa['cidade'] = 'Planaltina - GO';
    // echo "<pre>";
    // var_dump($pessoa);
    // echo "</pre>";
    // print $pessoa['nome'];


    //percorrendo esse vetor acima com foreach
    // foreach ($pessoa as $info) {
    //     print $info . "<br>";
    // }

    //percorrendo o mesmo vetor com as chaves
    foreach ($pessoa as $chave => $info) {
        $chaveMaiuscula = strtoupper($chave);
        print "<b>{$chaveMaiuscula}</b>: {$info} <br>";
    }
*/

/*
//vetor multidimensional
    $carros  = [
        'Palio' => [
            'Cor' => 'Vermelho',
            'Ano' => 1922,
            'Marca' => 'Fiat'
        ],
        'Celta' => [
            'Cor' => 'Azul',
            'Ano' => 2005,
            'Marca' => 'GM'
        ],
        'Corolla' => [
            'Cor' => 'Preto',
            'Ano' => 2025,
            'Marca' => 'Toyota'
        ]
    ];

    //lendo esse vetor
    // print $carros['Celta'];

    //percorrendo um vetor multidimensional

    foreach ($carros as $modelo => $informacoes) {
        $modeloMaiuisculo = strtoupper($modelo);
        print "<b>{$modeloMaiuisculo}:</b>";
        echo "<br> \n";
        foreach ($informacoes as $chave => $caracteristica) {
            print "<u>{$chave}</u>: {$caracteristica}";
            echo "<br>";
        }
    }
*/


/*
//alguma funcoes de vetor
    // $cores = ['azul', 'amarelo', 'verde', 'rosa'];
    //acresentando mais uma cor a esse vetor

    //primeira forma de fazer
    // $cores[] = 'ciano'; // adiciona ao final do vetor
    // outra maneira de adicionar ao final
    // array_push($cores, 'magenta');
    // adiciona ao inicio do vetor
    // array_unshift($cores, 'magenta');
    //remove a primeira posição do vetor
    // array_shift($cores);
    //remove do final do array
    // array_pop($cores);
    //inverte a ordem de um vetor
    // $cores = array_reverse($cores);
    $resultado = array_merge($cores, ['Paz', 'Alegria', 'Dinheiro']);
    echo "<pre>";
    var_dump($resultado);
    echo "</pre>";
*/


/*
//funcoes de ordenação de vetor em php
    $carros  = [];
    $carros['10006'] = 'Fusca';
    $carros['10004'] = 'Corolla';
    $carros['10003'] = 'Celta';
    $carros['10001'] = 'Palio';

    // sort($carros); //ordena pelo valor mas perde os indices
    // asort($carros); // ordena sem perder os indices, pelo conteudo
    // ksort($carros); //ordena pelas as chaves

    // echo "<pre>";
    // var_dump(array_keys($carros)); // retorna um array de chaves de um vetor
    // echo "</pre>";

    echo "<pre>";
    var_dump(array_values($carros)); // retorna um array somente do conteudo de um vetor
    echo "</pre>";


    echo "<pre>";
    var_dump(count($carros)); // retorna a contagem
    echo "</pre>";


    echo "<pre>";
    var_dump(in_array('Palio', $carros)); //Verifica se Uno existe no array de carros
    echo "</pre>";
*/

/*
//explode
    $data = '18-08-1992';
    $partes = explode('-', $data);
    echo "<pre>";
    var_dump($partes);
    echo "</pre>";
*/

//implode

$partes = ['18', '08', '1992'];
echo "<pre>";
var_dump(implode(',', $partes));
echo "</pre>";
