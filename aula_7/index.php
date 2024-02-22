<?php
require 'Client.php';

$client = new Client('680.795.810-29');
$client->fullname = 'Renato Nelson Teixeira';
$client->phone = '(51) 99218-8519';
$client->status = false;

$client->cpf = "teste";

echo $client->cpf."\n";
echo $client->fullname."\n";
echo $client->phone."\n";
echo ($client->status) ? 'Ativo' . "\n" : 'Inativo'."\n";

echo $client;