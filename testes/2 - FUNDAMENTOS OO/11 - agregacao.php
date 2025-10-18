<?php
require_once "classes/Produto.php";
require_once "classes/Fabricante.php";
require_once "classes/Cesta.php";
require_once "classes/Caracteristica.php";


$c1 = new Cesta;

$p1 = new Produto("Geladeira", 1200, 3000);
$p2 = new Produto("Fogão", 800, 1500);
$p3 = new Produto("Microondas", 300, 800);
$p4 = new Produto("Liquidificador", 100, 400);
$p5 = new Produto("Batedeira", 150, 500);
$p6 = new Produto("Cafeteira", 200, 600);

$c1->addItem($p1);
$c1->addItem($p2);
$c1->addItem($p3);
$c1->addItem($p4);
$c1->addItem($p5);


$itens = $c1->getItens();


foreach ($itens as $item) {
    echo "Item: {$item->getDescricao()}<br>";
}

/*
    echo "<pre>";
    print_r($c1);
    echo "</pre>";
*/