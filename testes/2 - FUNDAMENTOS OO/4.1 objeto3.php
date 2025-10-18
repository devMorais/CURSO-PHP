<?php

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;
}


//Vai gerar erro fatal pq agora os atributos estão privados e não podem
//ser acessados fora da classe diretemante 
$p1 = new Produto;
$p1->descricao = 'Chocolate'; // não é possivel acessar a propriedade privada
$p1->estoque = 10;
$p1->preco = 8.5;
