<?php

require_once 'src/Calculadora.php';

use App\Calculadora;

$calc = new Calculadora();

echo "Probando la calculadora...\n";
echo "Suma de 5 + 3 = " . $calc->sumar(5, 3) . "\n";
echo "Resta de 10 - 4 = " . $calc->restar(10, 4) . "\n";