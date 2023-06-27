<?php

require_once __DIR__ . "/Tipo.php";

class RegistradorDeLog
{
    private string $logFile = "log.txt";

    private function gravar(string $log): self
    {
        $arq = fopen($this->logFile, 'a');
        fwrite($arq, $log);
        fclose($arq);

        return $this;
    }

    public function limpar(): self
    {
        $arq = fopen($this->logFile, 'w');
        fwrite($arq, '');
        fclose($arq);

        return $this;
    }

    public function registrar(Tipo $tipo, float $operandoA, float $operandoB, float $resultado): self
    {
        $log = "REGITRO DE ESCRITA (" . (new DateTimeImmutable())->format("d-m-Y H:i:s") . ")\n";
        $log .= "Calculo de " . $tipo->value . "\n";
        $log .= "Operando A = " . $operandoA . "\n";
        $log .= "Operando B = " . $operandoB . "\n";
        $log .= "Resultado = " . $resultado . "\n\n";

        $this->gravar($log);

        return $this;
    }
}