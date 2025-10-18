<?php
//CONSTRUTORES DE DESTRUTORES 

class Produto
{
    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->setDesricao($descricao);
        $this->setEstoque($estoque);
        $this->setPreco($preco);
    }

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

    public function __destruct()
    {
        echo "DESTRUÍDO: {$this->getDescricao()}<br>";
    }
}

$p1 = new Produto('Chocolate', 10, 8.0);
$p2 = new Produto('Café', 23, 7.0);

echo "O estoque do {$p1->getDescricao()} é {$p1->getEstoque()} <br>";
echo "O preço do {$p1->getDescricao()} é {$p1->getPreco()} <br>";
echo "-----------------------------------------------------------<br>";
echo "O estoque do {$p2->getDescricao()} é {$p2->getEstoque()} <br>";
echo "O preço do {$p2->getDescricao()} é {$p2->getPreco()} <br>";
