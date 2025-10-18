<?php
//2.6
$prd  = new stdClass();
$prd->desc = 'Chocolate';
$prd->stq  = 100;
$prd->preco = 7;


echo "<pre>";
var_dump($prd);
echo "</pre>";

//Trnasformando em objeto para array
$vetor1 = (array) $prd;
echo "<pre>";
var_dump($vetor1['desc']);
echo "</pre>";

//Trnasformando em array para objeto
$vetor2 = [
    'desc'   =>  'Café',
    'stq'    =>  100,
    'preco'  => 300
];

$obj = (object) $vetor2;
echo "<pre>";
var_dump($obj);
print $obj->desc;
echo "</pre>";
