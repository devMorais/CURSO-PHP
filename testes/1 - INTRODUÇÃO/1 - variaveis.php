<?php

/*
=====================================================
== MEU RASCUNHO DE ESTUDOS EM PHP - CONCEITOS BÁSICOS ==
=====================================================
*/


// ===================================================================
// 1. OPERAÇÕES BÁSICAS COM STRINGS (TEXTOS)
// ===================================================================

$nome = 'Fernando';
$sobrenome = 'Aguiar';

// --- FORMA DE CONCATENAR SIMPLES (COM PONTO) ---
// O operador '.' é usado para "juntar" strings. É funcional, mas pode ficar verboso.
$nome_completo_simples = $nome . ' ' . $sobrenome;
// print $nome_completo_simples;


// --- FORMA DE CONCATENAR PROFISSIONAL (INTERPOLAÇÃO) ---
// Usando aspas DUPLAS ("), você pode colocar as variáveis diretamente dentro da string.
// É mais limpo e legível. A interpolação não funciona com aspas simples (').
$nome_completo_profissional = "{$nome} {$sobrenome}";
// print $nome_completo_profissional;


// --- COMO USAR ASPAS DENTRO DE UMA STRING ---

// Se a string usa aspas duplas, você pode usar aspas simples dentro dela (e vice-versa).
// print "O nome do autor é Pablo Dall'Oglio";

// Se precisar usar o mesmo tipo de aspas, use a barra invertida (\) para "escapar" o caractere.
// Isso diz ao PHP para tratar as aspas como texto, e não como o fim da string.
// print "{$nome} \"o desenvolvedor\" {$sobrenome}";


// ===================================================================
// 2. OPERAÇÕES BÁSICAS COM NÚMEROS E TIPAGEM FRACA
// ===================================================================

/*
 * O PHP tem "tipagem fraca", o que significa que ele tenta converter
 * os tipos de variáveis automaticamente para realizar uma operação.
 * Isso é chamado de "type juggling".
 */
$a = 5;
$b = '4fffff'; // Uma string que começa com um número

// O PHP analisará a string '4fffff', pegará o número '4' do início e
// ignorará o resto do texto para realizar o cálculo.
// A operação se torna: 5 * 4.
// var_dump($a * $b); // O resultado será int(20)


// ===================================================================
// 3. ATRIBUIÇÃO DE VARIÁVEIS: POR VALOR vs. POR REFERÊNCIA
// ===================================================================

// --- ATRIBUIÇÃO POR VALOR (COMPORTAMENTO PADRÃO) ---
// Por padrão, o PHP cria uma CÓPIA da variável. Alterar o original não afeta a cópia.
$valor_a = 5;
$valor_b = $valor_a; // $valor_b recebe uma CÓPIA de $valor_a.

$valor_a = 10; // Alterar $valor_a não afeta $valor_b.

// var_dump($valor_a); // int(10)
// var_dump($valor_b); // int(5) -> continua sendo 5


// --- ATRIBUIÇÃO POR REFERÊNCIA (COM &) ---
// Com o '&', você cria um "vínculo" ou "apelido". Ambas as variáveis apontam
// para o MESMO lugar na memória. Alterar uma, altera a outra.
$ref_a = 5;
$ref_b = &$ref_a; // $ref_b agora é uma REFERÊNCIA para $ref_a.

$ref_a = 10; // Ao alterar $ref_a, o valor de $ref_b também muda.

// var_dump($ref_a); // int(10)
// var_dump($ref_b); // int(10) -> o valor foi alterado junto!


// ===================================================================
// 4. ESTRUTURAS CONDICIONAIS (IF) E BOOLEANOS
// ===================================================================

$peso = 30;

// Uma expressão de comparação como ($peso > 40) retorna um valor booleano: true ou false.
$multa = ($peso > 40); // Como 30 não é > 40, $multa será `false`.
// var_dump($multa); // bool(false)

// O bloco de código dentro do `if` só é executado se a condição for `true`.
if ($peso > 40) {
    print 'Você foi taxado';
}

// Para verificar se uma variável NÃO está vazia, usa-se o operador de negação '!'
// com a função empty(). `empty()` retorna `true` se a variável for "", 0, null, etc.
$nome_preenchido = 'a';
if (!empty($nome_preenchido)) { // Lê-se: "Se $nome_preenchido NÃO estiver vazio..."
    // print 'A variável contém dados.';
}


// ===================================================================
// 5. ARRAYS E OBJETOS (E SUA ATRIBUIÇÃO POR REFERÊNCIA)
// ===================================================================

// --- ARRAY ---
// Uma lista de valores que pode ter chaves (índices) personalizadas.
$lista = ['cor' => 'vermelho', 'peso' => 20];
// var_dump($lista);


// --- OBJETOS ---
/*
 * PONTO-CHAVE: Objetos são SEMPRE passados por referência,
 * mesmo que você não use o "&".
 * Ao atribuir um objeto a outra variável, você está fazendo as duas
 * variáveis apontarem para a MESMA instância na memória.
 */

// `new stdClass` cria um objeto genérico vazio.
$pessoa1 = new stdClass;
$pessoa1->nome = 'Pedro';   // Atribuindo a propriedade 'nome'
$pessoa1->altura = 1.8; // Atribuindo a propriedade 'altura'

// AQUI ESTÁ A MÁGICA: $pessoa2 não é uma cópia.
// $pessoa2 agora aponta para o MESMO objeto que $pessoa1.
$pessoa2 = $pessoa1;

// Portanto, ao modificar o objeto usando a variável $pessoa2...
$pessoa2->nome = 'Joana';

// ...a modificação será refletida na variável $pessoa1, porque
// ambas se referem ao mesmo e único objeto.
var_dump($pessoa1);
print '<br>';
var_dump($pessoa2);

/*
SAÍDA DE AMBOS OS VAR_DUMPS:
--------------------------------
object(stdClass)#1 (2) {
  ["nome"]=>
  string(5) "Joana" // Note que o nome foi alterado para ambos!
  ["altura"]=>
  float(1.8)
}
--------------------------------
Isso prova que $pessoa1 e $pessoa2 são apenas "ponteiros" para o mesmo dado.
*/
