<?php

class Produto1
{
    private $descricao;
    private $estoque;
    private $preco;

    public function setDesricao($descricao)
    {
        if (is_string($descricao)) {
            $this->descricao = $descricao;
        }
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }


    public function setEstoque(int $estoque)
    {
        if (is_numeric($estoque)) {
            $this->estoque = $estoque;
        }
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setPreco($preco)
    {
        if (is_float($preco) && $preco > 0) {
            $this->preco =  $preco;
        }
    }

    public function getPreco()
    {
        return $this->preco;
    }


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

$p1 = new Produto1;
$p1->setDesricao('Chocolate');
$p1->setEstoque(10);
$p1->setPreco(10);


// forma de exbir com echo com mensagens
echo "O estoque do {$p1->getDescricao()} é {$p1->getEstoque()} <br>";
echo "O preço do {$p1->getDescricao()} é {$p1->getPreco()} <br>";
$p1->aumentarEstoque(20);
$p1->diminuirEstoque(5);
$p1->ajustarPreco(50);
echo "<b>----------------------------------------------------</b> <br>";
echo "O estoque do {$p1->getDescricao()} é {$p1->getEstoque()} <br>";
echo "O preço do {$p1->getDescricao()} é {$p1->getPreco()} <br>";
