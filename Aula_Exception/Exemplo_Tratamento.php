<?php

// Tipo Throwable:

/*
    Uma Throwable é uma classe capaz de ser lançada como uma interrupção de execução para o
    prompt de comando/shell.

    Exceções, Erros, Warnings, etc, são classes do tipo Throwable.

    https://www.php.net/manual/en/class.throwable.php
*/

try {
    $denominador = 10;
    $numerador = 0;

    $resultado = $denominador/$numerador;
} catch(Throwable $t) {
    echo $t->getMessage() . "\n";
}

// Tipo Exception:

/*
    Uma Exception é uma classe que herda Trhowable e possui todas as caracterís-
    ticas da classe pai.

    Usualmente lançada no nível de lógica do programa. Ou seja, desejamos uma
    exceção quando percebemos que uma regra de negócio não será atendida e, por
    isso, devemos interromper a execução do programa.

    DOCUMENTAÇÃO PADRÃO:
    https://www.php.net/manual/pt_BR/class.exception.php

    LISTA DE EXCEÇÕES PRÉ-DEFINIDAS:
    https://www.php.net/manual/pt_BR/reserved.exceptions.php

    OBS: As Exceções (Exception) não são lançadas pelo interpretador do PHP, ou
    seja, são lançadas pelo método throw. Sendo assim quando ocorre uma inter-
    rupção por alguma lógica não explícita ao programa, não é uma Exception e
    sim um Error.
*/

try {
    throw new Exception("Exceção lançada!");
} catch(Exception $e) {
    echo $e->getMessage() . "\n";
}

// Tipo Error:

/*
    Uma Error é uma classe que herda Trhowable e possui todas as caracterís-
    ticas da classe pai.

    Usualmente lançada no nível de interpretação do código pelo interpretador
    PHP. Ela geralmente reflete regras de negócio quebradas a nível de interpre-
    tação do código PHP, ou seja, não se relacionam às regras de negócios do
    projeto em questão

    DOCUMENTAÇÃO PADRÃO:
    https://www.php.net/manual/pt_BR/class.error.php

    OBS: Error por definição não deve ser instanciado e criado pelo programador
    pois se relaciona à lógicas do interpretador. Ainda sim pode ser feito.

    OBS: Os erros costumam ser atestados pelo interpretador das IDEs, não sendo
    regra porém.
*/

try {
    tentativaFalha();
} catch(Error $e) {
    echo $e->getMessage() . "\n";
}