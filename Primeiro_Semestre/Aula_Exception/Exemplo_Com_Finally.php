<?php

// Fluxo de execução dos tratamentos de exceção:

/*

    1 -> É executado o programa trabalhado dentro do try. Nesse bloco de código
    é o local onde haverá a possibilidade de um lançamento de Exception. As cha-
    madas de funções críticas devem ser feitas aqui.

    2 -> Caso seja lançada uma exceção dentro do bloco try a execução desse blo-
    co é ignorada e a exceção é arremessada como parâmetro para o bloco catch.

    3 -> O bloco catch irá trabalhar a exceção ou executar algum código desejado
    para o caso de erro.

    4 -> O bloco finally será executado independentemente da não execução do
    bloco try. Usualmente é desnecessária pois como já haverá um tratamento da
    exceção todos os códigos escritos após o tratamento serão executados de
    qualquer forma.

*/

try {
    $denominador = 10;
    $numerador = 0;

    $resultado = $denominador/$numerador;
} catch(Throwable $t) {
    echo $t->getMessage() . "\n";
} finally {
    echo "Esse bloco é executado independentemente.\n";
}