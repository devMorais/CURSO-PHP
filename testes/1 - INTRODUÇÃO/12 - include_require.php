<?php

// include 'quadrado.php';

// faz o mesmo que o include, mas se não encontrar o arquivo, gera um erro fatal
// require é mais rigoroso que include, pois se o arquivo não for encontrado, o script
// require 'quadrado.php';s


// require_once é semelhante ao include_once, mas gera um erro fatal se o arquivo não for   
// encontrado, garantindo que o script não continue a execução sem o arquivo necessário.
include_once 'quadrado.php';


require_once 'quadrado.php';
// require_once garante que o arquivo seja incluído apenas uma vez, evitando problemas de
// redefinição de funções ou classes.
// Isso é útil quando você precisa garantir que uma função ou classe seja definida apenas uma vez
// no seu código, evitando erros de redefinição.


//melhor forma é usar require_once, pois garante que o arquivo seja incluído apenas uma vez
// e evita problemas de redefinição de funções ou classes.


var_dump(quadrado(5));
