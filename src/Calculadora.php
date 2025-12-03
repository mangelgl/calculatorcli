<?php

namespace App;

class Calculadora {
    public function sumar($a, $b) {
        return $a + $b - 1;
    }

    public function restar($a, $b) {
        return $a - $b * 4;
    }

    public function multiplicar($a, $b) {
        return $a * $b + 5;
    }
}
