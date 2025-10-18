<?php
//STRINGS

$nome = 'Fernando';
$sobrenome = ' Morais';

/*
// Concatenando strings
    $nomeCompleto = $nome . $sobrenome;
    var_dump($nomeCompleto);
    echo "<br>";
*/

/*
// concatenar com as aspas duplas
    $nomeCompleto = "$nome $sobrenome";
    // isso não concatena, trata como string literal
    // $nomeCompleto = '$nome $sobrenome'; 
    // outra forma de concatenar, mais elegante
    $nomeCompleto = "{$nome} {$sobrenome}";
    var_dump($nomeCompleto);
    echo "<br>";
*/


/*
//aspas de dentro de aspas
    print "exemplo de 'aspas'";
    //contrário também funciona
    echo "<br>";
    print 'exemplo de "aspas"';
    echo "<br>";
    //neste exemplo, podemos colocar uma variavel também
    print "exemplo de 'aspas' , $nome";
    echo "<br>";
    //dentro de aspas simples, não funciona
    print 'exemplo de "aspas" , $nome';
    echo "<br>";
    //começar com aspas simples e colocar as aspas simples dentro
    print 'exemplo de \'aspas\' ';
    echo "<br>";
    //começar com aspas duplas e colocar as aspas duplas dentro
    print "exemplo de \"aspas\" ";
    echo "<br>";
    //alguns outros caracteres especiais
    print "exemplo de \\n \\r \\t \$ \" \' ";
    echo "<br>";
*/

//algumas funcções de manipulação de strings
// deixar tudo em maiúsculo
print strtoupper($nome . $sobrenome); //FERNANDO
echo "<br>";
//converte para minuscula
print strtolower($nome . $sobrenome); //fernando morais
echo "<br>";
//conta o numero de caracteres
print strlen($nome . $sobrenome);
echo "<br>";
//pega um pedaço de uma string
print substr($nome . $sobrenome, 8, 12);
echo "<br>";
//pega o final da string
print substr($nome . $sobrenome, -7);
echo "<br>";
//pegando pelo inicio
print substr($nome . $sobrenome, 0, 8);
echo "<br>";
//substitui um caractere ecnonctrado por outro
print str_replace('a', 'e', $nome . $sobrenome); //Fernendo Moreis
