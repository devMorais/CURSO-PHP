<?php
//TIPOS ANULAVEIS 

declare(strict_types=1);


// function create_link(string $action, string $label): string
// {
//     return "<a href='$action'>$label</a>";
// }

function create_link(string $action, ?string $label): string
{
    $label = $label ?? 'Clique aqui';
    return "<a href='$action'>$label</a>";
}

// function create_link(string $action, string $label = null): string
// {
//     $label = $label ?? 'Clique aqui';
//     return "<a href='$action'>$label</a>";
// }

// create_link(4, 5); // fatal error
// print_r(create_link('delete.php', 'Excluir')); // correto
// print_r(create_link('delete.php', null));  //Fatal error: ->conforme primeiro exemplo
print_r(create_link('delete.php', null)); // vai sair com Deprecated: acho que no php novo
