<?php

class EscritorDeArquivo
{
    private string $caminho;

    public function __construct(string $caminho)
    {
        $this->caminho = $caminho;
    }

    public function escreve(string $conteudo)
    {
        file_put_contents($this->caminho, $conteudo . PHP_EOL, FILE_APPEND);
    }
}