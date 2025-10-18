<?php

require_once "classes/Produto.php";
require_once "classes/Fabricante.php";
require_once "classes/Caracteristica.php";

$p1 = new Produto('Chocolate', 100, 7);
$p1->addCaracteristica('Cor', 'Branco');
$p1->addCaracteristica('Sabor', 'Amargo');
$p1->addCaracteristica('Peso', '500g');

/*
    echo "<pre>";
    print_r($p1);
    echo "</pre>";
*/

print "<b>Produto: {$p1->getDescricao()}</b><br>";
foreach ($p1->getCaracteristicas() as $caracteristica) {
    print "<u>{$caracteristica->getNome()}:</u> <i>{$caracteristica->getValor()}</i><br>";
}
