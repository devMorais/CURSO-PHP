<?php

require_once "classes/Conta.php";

//A classe conta sendo abstrata não pode ser instanciada
// vai gerar um erro
$conta = new Conta(5606, 'CC-16321', 60000);
