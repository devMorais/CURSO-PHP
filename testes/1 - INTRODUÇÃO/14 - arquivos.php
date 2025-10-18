<?php
//Arquivos e diretórios

/*
// abre um arquivo para leitura
    $handle = fopen('\laragon\www\CURSO-PHP\testes\testes_arquivos.txt', 'r');

    while (!feof($handle)) {
        //retorna a linha atual do arquivo
        print fgets($handle, 4096);
        print "<br>";
    }
    // fecha o arquivo
    fclose($handle);
/*

/*
// escreve no arquivo
    $handle = fopen('\laragon\www\CURSO-PHP\testes\testes_arquivos2.txt', 'w');

    fwrite($handle, "18/18/1992" . PHP_EOL);
    fwrite($handle, "10/12/2003" . PHP_EOL);
    fwrite($handle, "17/11/1998" . PHP_EOL);
    // fecha o arquivo
    fclose($handle);
*/

/*
// lê o arquivo inteiro
    print file_get_contents('\laragon\www\CURSO-PHP\testes\testes_arquivos.txt');
*/

/*
//escreve no arquivo
    file_put_contents('\laragon\www\CURSO-PHP\testes\testes_arquivos3.txt', "18/18/1992" . PHP_EOL);
*/

/*
//outras maneiras de ler arquivos
    $arquivo = file('\laragon\www\CURSO-PHP\testes\testes_arquivos2.txt');

    foreach ($arquivo as $linha) {
        print $linha . "<br>";
    }
*/

//copiar arquivos
// copy('\laragon\www\CURSO-PHP\testes\testes_arquivos.txt', '\laragon\www\CURSO-PHP\testes\novo.txt')

//renomear arquivos
//serve para mover arquivos também
// rename('\laragon\www\CURSO-PHP\testes\novo2.txt', '\laragon\www\CURSO-PHP\testes\renomeei_arquivo.txt');

//excluir arquivos
// unlink('\laragon\www\CURSO-PHP\testes\renomeei_arquivo.txt');F

/*
//verifica se o arquivo existe
    if (file_exists('\laragon\www\CURSO-PHP\testes\testes_arquivos.txt')) {
        print "O arquivo <b>testes_arquivos.txt</b> existe";
    }
*/

/*
//cria um diretório
    mkdir('\laragon\www\CURSO-PHP\testes\meu_diretorio', 0777);
*/

/*
//excluir diretório
    rmdir('\laragon\www\CURSO-PHP\testes\meu_diretorio');
*/

//lista os arquivos de um diretório
$arquivos = scandir('\laragon\bin');
foreach ($arquivos as $arquivo) {
    print $arquivo . "<br>";
}
