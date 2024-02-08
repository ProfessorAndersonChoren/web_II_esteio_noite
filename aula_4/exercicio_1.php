<?php
$numeros = [];
for ($i = 1; $i < 11; $i++) {
    $entrada = readline("Digite o $i" . "° número: ");
    array_push($numeros, $entrada);
}

echo 'A lista contêm ' . contabilizarPositivo($numeros) . " números positivos\n";
echo 'A lista contêm ' . contabilizarPares($numeros) . " números pares\n";

function contabilizarPositivo(array $numeros): int
{
    $lista = array_filter($numeros, fn ($numero) => $numero > 0);
    return count($lista);
}

function contabilizarPares(array $numeros): int
{
    $lista = array_filter($numeros, fn ($numero) => $numero % 2 == 0);
    return count($lista);
}
