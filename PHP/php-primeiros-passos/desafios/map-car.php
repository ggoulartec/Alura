<?php

$carros = [
  'LMS-2232' => [
    'marca' => 'VW',
    'modelo' => 'Golf',
    'ano' => '2017'
  ],

  'KLM-1324' => [
    'marca' => 'Ford',
    'modelo' => 'Fiesta',
    'ano' => '2012'
  ],

  'OPN-5612' => [
    'marca' => 'Fiat',
    'modelo' => 'Uno',
    'ano' => '2000'
  ],
];

foreach ($carros as $placa => $carro) {
  echo $placa . ': ' . $carro['marca'] . ' - ' . $carro['modelo'] . ' - ' . $carro['ano'] . PHP_EOL;
}

?>