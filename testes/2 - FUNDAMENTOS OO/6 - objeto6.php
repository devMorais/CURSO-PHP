<?php
//PROMOÇÃO DE PROPRIEDADES NO CONSTRUTOR

class Produto3
{

    // private string $descricao;
    // private float $estoque;
    // private float $preco;

    //declarando o private dentro do construct não há necessidade de declarar os atributos e nem as variveis dentro do método
    //dessa forma conseguimos eleminar 6 linhas de código 
    //com essa técnica de Constructor property promotion
    public function __construct(private string $descricao, private float $estoque, private float $preco)
    {
        // $this->descricao = $descricao;
        // $this->estoque = $estoque;
        // $this->preco = $preco;

        echo $this->descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}

$p1 = new Produto3('Vencer na vida', 10, 5);
// print 'Descrição ' . $p1->getDescricao() . '<br>' . PHP_EOL;
// print 'Estoque ' . $p1->getEstoque() . '<br>' . PHP_EOL;
// print 'Preço ' . $p1->getPreco() . '<br>' . PHP_EOL;
