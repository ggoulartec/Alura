<?php

$idade = 22;

$acompanhantes = 1;

echo "Bem vindo ao MPB Bar" . PHP_EOL;
echo "Para poder entrar, voce deve ser maior de idade, ou a partir de 16 anos, acompanhado(a)" . PHP_EOL;

if ($idade >=18) {
  echo "como vc tem $idade, voce pode entrar sozinho.\nBoa festa!";
} elseif ($idade >= 16 && $acompanhantes == 1) {
  echo "voce e menor de idade, mas esta acompanhado(a), entao pode entrar";
} else {
  echo "voce tem $idade anos, entao voce nao pode entrar";
}