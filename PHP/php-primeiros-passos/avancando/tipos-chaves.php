<?php

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd',
  'qualquer_coisa' => 'Teste'
];

// var_dump($array);

foreach ($array as $item) {
  echo $item . PHP_EOL;
}
