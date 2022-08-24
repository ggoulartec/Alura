<?php

$idadeList = [23, 19, 25, 30, 41, 18, 21, 35];

// adiciona item no proximo indice
$idadeList[] = 20;

foreach ($idadeList as $idade) {
  echo $idade . PHP_EOL;
}
