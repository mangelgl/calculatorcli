<?php

require_once 'src/Calculadora.php';
use App\Calculadora;

$calc = new Calculadora();
$errores = false;

// Test 1: Probar la suma
if ($calc->sumar(2, 2) !== 4) {
    echo "❌ Error: 2 + 2 debería ser 4\n";
    $errores = true;
} else {
    echo "✅ Suma OK\n";
}

// Test 2: Probar la resta
if ($calc->restar(5, 3) !== 2) {
    echo "❌ Error: 5 - 3 debería ser 2\n";
    $errores = true;
} else {
    echo "✅ Resta OK\n";
}

// Test 3: Probar la multiplicación
if ($calc->multiplicar(3,4) !== 12) {
    echo "❌ Error: 3 x 4 debería ser 12\n";
    $errores = true;
}

// Si hubo errores, avisar a GitHub Actions con un código de salida distinto de 0
if ($errores) {
    exit(1); // Esto hace que el pipeline se ponga ROJO
}
