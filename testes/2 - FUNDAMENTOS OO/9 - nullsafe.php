<?php

declare(strict_types=1);
class Estado
{
    private string $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}

class  Cidade
{
    private string $nome;
    private ?Estado $estado;

    public function __construct($nome, $estado = null)
    {
        $this->nome = $nome;
        $this->estado  = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}

/*
$estado = new Estado('Distrito Federal - DF');
$cidade = new Cidade('Sobradinho', $estado);

echo "<pre>";
// var_dump($estado);
// echo "<br>";
// var_dump($cidade);
print $cidade->getEstado()->getNome();
echo "</pre>";
*/

$cidade = new Cidade('Brasilinha');

//Vai gerar um erro, pois getEstado está retornando null
// $cidade->getEstado()->getNome(); 

// //corrigir 1
// 
// if ($cidade->getEstado() instanceof Estado) {
//   print $cidade->getEstado()->getNome();
// }

//operador null safe
print $cidade->getEstado()?->getNome();
