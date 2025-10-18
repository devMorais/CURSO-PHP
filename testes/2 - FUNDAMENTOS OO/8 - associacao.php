<?php

require_once "classes\Fabricante.php";
require_once "classes\Produto.php";


$p1 = new Produto('Chocolate', 100, 7);
$f1 = new Fabricante('Nestlê', 'Rua 100', 2960688);

//associacao
$p1->setFabricante($f1);


$desc = $p1->getDescricao();
//encadeamento de chamadas
$fabricante = $p1->getFabricante()->getNome();

print "O Fabricante do produto {$desc} é {$fabricante}";

/*
echo "<pre>";
var_dump($p1);
echo "<br>";
echo "-------------------------------------------------------<br>";
var_dump($f1);
*/