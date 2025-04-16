<?php
spl_autoload_register(function (string $classe) {
    // Substitui a namespace 'App\' por 'app/' no caminho da classe
    $caminhoArquivo = str_replace('App\\', 'biblioteca/app/', $classe);
    
    // Substitui as barras invertidas por barras de diretório do sistema
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    
    // Adiciona a extensão .php ao final do caminho
    $caminhoArquivo .= '.php';

    // Caminho completo para o arquivo
    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminhoArquivo;

    // Verifica se o arquivo existe e o inclui
    if (file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto;
    } else {
        // Se o arquivo não for encontrado, imprime uma mensagem de erro
        echo "Arquivo não encontrado: $caminhoCompleto\n";
    }
});

