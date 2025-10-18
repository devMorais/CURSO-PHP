<?php

$produto  = [];
$produto['desc'] = "Café";
$produto['estoque'] = 100;
$produto['preco'] = 7;

$objeto = new stdClass();
foreach ($produto as $chave => $valor) {
    $objeto->$chave = $valor;
}

echo "<pre>";
var_dump($objeto);
print $objeto->desc;
echo "</pre>";
