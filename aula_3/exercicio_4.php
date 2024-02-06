<?php
$email = readline("Digite seu email: ");

try {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Email inválido!!!");
    }
} catch (Exception $e) {
    echo "Lamento, houve um erro inesperado:". $e->getMessage()." \n";
}
echo "Seu email é válido!!!";
