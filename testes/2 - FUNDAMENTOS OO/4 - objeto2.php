<?php

class Produto
{
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($unidades)
    {
        if (is_numeric($unidades) && $unidades >= 0) {
            $this->estoque += $unidades;
        }
    }

    public function diminuirEstoque($unidades)
    {
        if (is_numeric($unidades) && $unidades >= 0) {
            $this->estoque -= $unidades;
        }
    }

    public function ajustarPreco($percentual)
    {
        if (is_numeric($percentual) && $percentual > 0) {
            $this->preco *= (1 + ($percentual / 100));
        }
    }
}

$p1 = new Produto;
$p1->descricao = 'Chocolate';
$p1->estoque   = 10;
$p1->preco     = 3;


// $p1->estoque   = 'string auqeue';  // gerava erro pq os atributos estão public

/*
// forma de exbir com var_dump
    echo "<pre>";
    echo "<b>Objeto antes de chamar os metodos</b> <br>";
    var_dump($p1);
    echo "</pre>";
    $p1->aumentarEstoque(20);
    $p1->diminuirEstoque(5);
    $p1->ajustarPreco(50);
    echo "<pre>";
    echo "<b>Objeto depois de chamar os metodos (Modificado)</b> <br>";
    var_dump($p1);
    echo "</pre>";
*/


// forma de exbir com echo com mensagens
echo "O estoque do {$p1->descricao} é {$p1->estoque} <br>";
echo "O preço do {$p1->descricao} é {$p1->preco} <br>";
$p1->aumentarEstoque(20);
$p1->diminuirEstoque(5);
$p1->ajustarPreco(50);
echo "<b>----------------------------------------------------</b> <br>";
echo "O estoque do {$p1->descricao} é {$p1->estoque} <br>";
echo "O preço do {$p1->descricao} é {$p1->preco} <br>";
