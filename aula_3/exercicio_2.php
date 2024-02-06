<?php
function contarPalavras(string $frase):int
{
    $separador = ' ';
    $palavras = explode($separador, $frase);
    return count($palavras);
}

$entrada = readline('Digite um frase e descubra quantas palavras ele possui: ');
$qtdPalavras = contarPalavras($entrada);
echo "A frase \"$entrada\" tem $qtdPalavras palavras!";