<?php

require_once "cliente.php";
require_once "sup_tecnico.php";

$client = new cliente();
$client->setNome();
$client->teste();
$client->escolha();

$ordemServico = new sup_tecnico();
$ordemServico->inserirsup_tecnico();

