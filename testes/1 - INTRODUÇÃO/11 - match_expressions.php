<?php
// MATCH EXPRESSIONS
// https://www.php.net/manual/en/control-structures.match.php   



$codigo = 45;
// A expressão match é uma alternativa ao switch, mas com algumas diferenças importantes:
// 1. Ela é estritamente igual (===), o que significa que não faz coerção de tipos.
// 2. Ela retorna um valor, não apenas executa um bloco de código.  
// 3. Ela não permite fall-through, ou seja, não executa os casos seguintes se um caso for correspondido.
// 4. Ela pode ser usada para retornar valores diretamente, tornando o código mais conciso
// $status = match ($codigo) {
//     1 => 'Iniciado',
//     2 => 'Em Atendimento',
//     3 => 'Finalizado'
// };


// A expressão match pode chamar funções diretamente, o que é útil para obter valores dinâmicos
function getAlgumaCoisa()
{
    return 'Em Atendimento';
}

$status = match ($codigo) {
    1 => 'Iniciado',
    2 => 'Em Atendimento',
    3 => getAlgumaCoisa(),
    default => 'Desconhecido'
};



print $status; // Em Atendimento