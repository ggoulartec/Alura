<?php

$conta1 = [
  'titular' => 'Gustavo',
  'saldo' => 1900
];

$conta2 = [
  'titular' => 'Lara',
  'saldo' => 1800
];

$conta3 = [
  'titular' => 'Joao Vitor',
  'saldo' => 1600
];

$contasCorrentes = [$conta1, $conta2, $conta3];


for ($i=0; $i < count($contasCorrentes); $i++) { 
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}