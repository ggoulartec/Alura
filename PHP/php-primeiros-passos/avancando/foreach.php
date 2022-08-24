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

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Gustavo',
    'saldo' => 1900
  ],
  '123.456.789-11' => [
    'titular' => 'Lara',
    'saldo' => 1800
  ],
  '123.456.789-12' => [
    'titular' => 'Joao Vitor',
    'saldo' => 1600
  ]
];

$contasCorrentes['123.456.789-13'] = [
  'titular' => 'Claudia',
  'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
