<?php

class Calculadora {

    public function soma(int $p_a, int $p_b): int {

        return $p_a + $p_b;

    }

    public function subtracao(int $p_a, int $p_b): int {

        return $p_a - $p_b;

    }

    public function multiplicacao(int $p_a, int $p_b): int {

        return $p_a * $p_b;

    }

    public function divisao(int $p_a, int $p_b): int {

        return $p_a/$p_b;

    }

}