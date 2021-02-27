<?php

require_once 'EscritorDeArquivo.php';

// Definir o cenário
$caminhoArquivo = md5(time());
$escritor = new EscritorDeArquivo($caminhoArquivo);

// Executar a ação a ser testada
$escritor->escreve('Primeira linha');
$escritor->escreve('Uma outra linha');

// Verificar se o resultado é o esperado
$conteudoEsperado = 'Primeira linha
Uma outra linha
';

if ($conteudoEsperado === file_get_contents($caminhoArquivo)) {
    echo 'TESTE OK' . PHP_EOL;
} else {
    echo 'TESTE FALHOU' . PHP_EOL;
}
