<?php


function aplica_configuracao(object $configuracoes)
{
    date_default_timezone_set($configuracoes->timezone);
    $_SESSION['language'] = $configuracoes->language;

    print "Aplicou a configuração: {$configuracoes->timezone} e {$configuracoes->language}";
}

$configs = new stdClass();
$configs->timezone = 'America/Sao_Paulo';
$configs->language = 'pt_BR';

// aplica_configuracao($configs);
// aplica_configuracao(parse_ini_file('config.ini')); error pq espera um objeto
aplica_configuracao((object)parse_ini_file('config.ini')); // converte o array para objeto
