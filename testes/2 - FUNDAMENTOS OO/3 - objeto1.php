<?php
class Produto
{

    /*
//atributos
    podemos definir os atributos com palavras chaves que determinam
    como este atributo será manipulado de dentro e fora da classe
    public
    protected
    private
    static
*/
    public $descricao;
    public $estoque;
    public $preco;
}

//definindo os objetos da classe Produto
$p1 = new Produto;
$p1->descricao  = 'Chocolate';
$p1->estoque    = 10;
$p1->preco      = 5;

$p2 = new Produto;
$p2->descricao  = 'Café';
$p2->estoque    = 20;
$p2->preco      = 40;

//Formas de exibir este objetos
print "{$p1->descricao} <br>";
echo "<pre>";
var_dump($p1);
var_dump($p2);
echo "</pre>";

//Criar os atributos com a palavra reservada public não é uma boa forma,
//pois permitem que gravem valores inconcistentes 
