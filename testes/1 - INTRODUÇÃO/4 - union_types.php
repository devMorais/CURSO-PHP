<?php
//união de tipos
declare(strict_types=1);


//com float pode receber int e float 
function calcula_juros_simples(int|float $valor, int|float $periodo, int|float $taxa)
{
    return $valor + $valor * $periodo * ($taxa / 100);
}

//agora com int podemos receber somente int
// function calcula_juros_simples(int $valor, int|float $periodo, int|float $taxa)
// {
//     return $valor + $valor * $periodo * ($taxa / 100);
// }

// function calcula_juros_simples(float $valor, float $periodo, float $taxa)
// {
//     return $valor + $valor * $periodo * ($taxa / 100);
// }

print calcula_juros_simples(100.5, 5, 10); // resultará em erro Fatal error: usando a segunda função


/*
//Exemplo mais útil para explicar union_types:
    function soma_data($data_base, $interval)
    {
        $date = new DateTime($data_base);
        if ($interval instanceof DateInterval) {
            $date->add($interval);
        } else {
            $date->add(new DateInterval('P' . $interval . 'D'));
        }

        return $date->format('d-m-Y');
    }

    // print soma_data('2025-07-07', 10);
    print "<br>\n";
    print soma_data('2025-07-07', new DateInterval('P1M'));
*/

/*
//union_types em classes orientação orientada a objetos
    class Turma
    {
        private int $id;
        private int $dia_semana;
        private int|string $sala;

        public function setNumeroSala(int|string $sala)
        {
            $this->sala = $sala;
        }
    }

    $t = new Turma;
    $t->setNumeroSala('xxx5');
    // $t->setNumeroSala(true); //error Fatal error
    // $t->setNumeroSala(['ushsu']); //error Fatal error
*/
